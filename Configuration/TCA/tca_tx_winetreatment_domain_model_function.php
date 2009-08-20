<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_winetreatment_domain_model_function'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_winetreatment_domain_model_function']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,name,icon',
	),
	'feInterface' => $GLOBALS['TCA']['tx_winetreatment_domain_model_function']['feInterface'],
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
				'foreign_table' => 'tx_winetreatment_domain_model_function',
				'foreign_table_where' => 'AND tx_winetreatment_domain_model_function.pid=###CURRENT_PID### AND tx_winetreatment_domain_model_function.sys_language_uid IN (-1,0)',
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
		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_function.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 200,
				'eval' => 'required,trim',
			),
		),
		'icon' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_function.icon',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file_reference',
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
				'uploadfolder' => 'uploads/tx_winetreatment',
				'show_thumbs' => 1,
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
	),
	'types' => array(
		0 => array(
			'showitem' => 'hidden;;1, name, icon'
		),
	),
	'palettes' => array(
		1 => array(
			'showitem' => ''
		),
	),
);

