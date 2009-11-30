<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_winetreatment_domain_model_access'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_winetreatment_domain_model_access']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,customer,tables',
		'maxDBListItems' => 50,
		'maxSingleDBListItems' => 50,
	),
	'feInterface' => $GLOBALS['TCA']['tx_winetreatment_domain_model_access']['feInterface'],
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
				'default' => 0,
			),
		),
		'customer' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:jr_remote_access/Resources/Private/Language/locallang_db.xml:tx_jrremoteaccess_domain_model_customer',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_jrremoteaccess_domain_model_customer',
				'maxitems' => 1,
			),
		),
		'tables' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_table',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_winetreatment_domain_model_table',
				'appearance' => array(
					'collapseAll' => TRUE,
					'expandSingle' => TRUE,
					'newRecordLinkAddTitle' => TRUE,
					'newRecordLinkPosition' => 'top',
				),
				'foreign_field' => 'access',
			),
		),
	),
	'types' => array(
		0 => array(
			'showitem' => 'hidden;;1, customer, tables',
		),
	),
	'palettes' => array(
		1 => array(
			'showitem' => ''
		),
	),
);

?>
