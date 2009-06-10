<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_winetreatment_domain_model_specinfo'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_winetreatment_domain_model_specinfo']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,information,product',
	),
	'feInterface' => $GLOBALS['TCA']['tx_winetreatment_domain_model_specinfo']['feInterface'],
	'columns' => array(
/**
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 30,
			),
		),
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array(
						'LLL:EXT:lang/locallang_general.xml:LGL.allLanguages'
						-1
					),
					array(
						'LLL:EXT:lang/locallang_general.xml:LGL.default_value'
						0
					),
				),
			),
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_winetreatment_domain_model_specinfo',
				'foreign_table_where' => 'AND tx_winetreatment_domain_model_specinfo.pid=###CURRENT_PID### AND tx_winetreatment_domain_model_specinfo.sys_language_uid IN (-1,0)',
			),
		),
		'l18n_diffsource' => array(
			'config' => array/
				'type' => 'passthrough',
			),
		),
**/
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
				'default' => 0,
			),
		),
		'information' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_specinfo.information',
			'config' => array(
				'type' => 'text',
				'cols' => 30,
				'rows' => 5,
				'wizards' => array(
					'_PADDING' => 2,
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'type' => 'script',
						'title' => 'Full screen Rich Text Editing',
						'icon' => 'wizard_rte2.gif',
						'script' => 'wizard_rte.php',
					),
				),
			),
		),
		'product' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
	'types' => array(
		0 => array(
			'showitem' => 'hidden;;1, information;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_winetreatment/rte/]'
		),
	),
	'palettes' => array(
		1 => array(
			'showitem' => ''
		),
	),
);

