<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_winetreatment_domain_model_table'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_winetreatment_domain_model_table']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,access,name',
	),
	'feInterface' => $GLOBALS['TCA']['tx_winetreatment_domain_model_table']['feInterface'],
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
				'default' => 0,
			),
		),
		'access' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_access',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_winetreatment_domain_model_access',
				'maxitems' => 1,
			),
		),
		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_table.name',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('Special Information', 'SpecialInformation'),
					array('Wine', 'Wine'),
					array('Usage', 'Usages'),
					array('Function', 'Functions'),
				),
				'maxitems' => 1,
				'minitems' => 1,
			),
		),
	),
	'types' => array(
		0 => array(
			'showitem' => 'hidden;;1, access, name'
		),
	),
	'palettes' => array(
		1 => array(
			'showitem' => ''
		),
	),
);

