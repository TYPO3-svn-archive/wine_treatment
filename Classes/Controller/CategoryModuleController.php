<?php

class Tx_WineTreatment_Controller_CategoryModuleController extends t3lib_SCbase {

	/**
	 * @var template
	 */
	public $doc;

	protected $relativePath;

	protected $pageRecord = array();

	protected $isAccessibleForCurrentUser = false;


	/**
	 * Initializes the Module
	 *
	 * @return void
	 */
	public function __construct() {
		parent::init();
		$this->doc = t3lib_div::makeInstance('template');
		$this->doc->setModuleTemplate('EXT:wine_treatment/Resources/Private/Templates/Module/CategoryModule.html');
		$this->doc->backPath = $GLOBALS['BACK_PATH'];
		$this->relativePath = t3lib_extMgm::extRelPath('wine_treatment');
		$this->pageRecord = t3lib_BEfunc::readPageAccess($this->id, $this->perms_clause);
		$this->isAccessibleForCurrentUser = (
			$this->id && is_array($this->pageRecord) || !$this->id && $this->isCurrentUserAdmin()
		);

		if ($GLOBALS['BE_USER']->workspace !== 0) {
			$this->isAccessibleForCurrentUser = false;
		}
	}

	public function main() {
		$this->render();
		$this->flush();
	}

	public function render() {
		global $BE_USER, $LANG, $BACK_PATH, $TCA_DESCR, $TCA, $CLIENT, $TYPO3_CONF_VARS;

		if ($this->isAccessibleForCurrentUser) {
			$this->loadHeaderData();
			$this->content = '<div id="winetreatmentContent"></div>';
		} else {
			$this->content = $this->doc->spacer(10);
		}

	}

	public function flush() {
		$content = $this->doc->startPage($GLOBALS['LANG']->getLL('title'));
		$content .= $this->doc->moduleBody(
			$this->pageRecord,
			$this->getDocHeaderButtons(),
			$this->getTemplateMarkers()
		);
		$content .= $this->doc->endPage();
//		$content .= $this->doc->insertStylesAndJS($content);
		$this->content = null;
		$this->doc = null;
		echo $content;
	}

	protected function isCurrentUserAdmin() {
		return (bool)$GLOBALS['BE_USER']->user['admin'];
	}

	protected function loadHeaderData() {
		$this->loadStylesheet($this->relativePath . 'Resources/Public/CSS/CategoryModule.css');
		$this->doc->loadExtJS();
		$this->doc->JScode .= t3lib_div::wrapJS('
			Ext.namespace("WineTreatment");
			WineTreatment.statics = ' . json_encode($this->getJavaScriptConfiguration()) . ';
			WineTreatment.lang = ' . json_encode($this->getJavaScriptLabels()) . ';
		');
		$this->loadJavaScript($this->relativePath . 'Resources/Public/Javascript/t3_winetreatment.js');
	}

	protected function loadStylesheet($fileName) {
		$fileName = t3lib_div::resolveBackPath($this->doc->backPath . $fileName);
		$this->doc->JScode .= "\t" . '<link rel="stylesheet" type="text/css" href="' . $fileName . '" />' . "\n";
	}

	protected function loadJavaScript($fileName) {
		$fileName = t3lib_div::resolveBackPath($this->doc->backPath . $fileName);
		$this->doc->JScode .= "\t" . '<script language="javascript" type="text/javascript" src="' . $fileName . '"></script>' . "\n";
	}

	protected function getJavaScriptConfiguration() {
		$configuration = array(
			'startUid' => $this->id,
			'renderTo' => 'winetreatmentContent',
			'isSSL' => t3lib_div::getIndpEnv('TYPO3_SSL'),
			'ajaxController' => $this->doc->backPath . 'ajax.php?ajaxID=tx_winetreatment::controller',
		);
		return $configuration;
	}

	protected function getJavaScriptLabels() {
		$coreLabels = array(
			'title' => $GLOBALS['LANG']->getLL('title'),
		);
		return $coreLabels;
	}

	protected function getDocHeaderButtons() {
		$buttons = array(
			'csh' => t3lib_BEfunc::cshItem(
				'_MOD_web_func',
				'',
				$GLOBALS['BACK_PATH']
			),
			'shortcut' => $this->getShortcutButton(),
			'save' => '',
		);
		$buttons['save'] = '';
		return $buttons;
	}

	protected function getShortcutButton() {
		$result = '';

		if ($GLOBALS['BE_USER']->mayMakeShortcut()) {
			$result = $this->doc->makeShortcutIcon(
				'',
				'function',
				$this->MCONF['name']
			);
		}

		return $result;
	}

	protected function getTemplateMarkers() {
		$markers = array(
			'FUNC_MENU' => $this->getFunctionMenu(),
			'CONTENT' => $this->content,
			'TITLE' => $GLOBALS['LANG']->getLL('title'),
		);
		return $markers;
	}

	protected function getFunctionMenu() {
		return t3lib_BEfunc::getFuncMenu(
			0,
			'SET[function]',
			$this->MOD_SETTINGS['function'],
			$this->MOD_MENU['function']
		);
	}

}

