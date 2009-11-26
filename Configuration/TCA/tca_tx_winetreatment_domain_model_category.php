<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_winetreatment_domain_model_category'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_winetreatment_domain_model_category']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,name,gvo_valid,url,products',
		'maxDBListItems' => 50,
		'maxSingleDBListItems' => 50,
	),
	'feInterface' => $GLOBALS['TCA']['tx_winetreatment_domain_model_category']['feInterface'],
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
				'foreign_table' => 'tx_winetreatment_domain_model_category',
				'foreign_table_where' => 'AND tx_winetreatment_domain_model_category.pid=###CURRENT_PID### AND tx_winetreatment_domain_model_category.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_category.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 200,
				'eval' => 'required,trim',
			),
		),
		'url' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_category.url',
			'config' => array(
				'type' => 'input',
				'size' => 15,
				'max' => 255,
				'checkbox' => '',
				'eval' => 'trim',
				'wizards' => array(
					'_PADDING' => 2,
					'link' => array(
						'type' => 'popup',
						'title' => 'Link',
						'icon' => 'link_popup.gif',
						'script' => 'browse_links.php?mode=wizard',
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
					),
				),
			),
		),
		'gvo_valid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_category.gvo_valid',
			'config' => array(
				'type' => 'input',
				'size' => 8,
				'max' => 20,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => 0
			),
		),
 		'products' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_winetreatment_domain_model_product',
				'appearance' => array(
					'collapseAll' => TRUE,
					'expandSingle' => TRUE,
					'newRecordLinkAddTitle' => TRUE,
					'newRecordLinkPosition' => 'top',
				),
				'foreign_field' => 'category',
			),
		),
/**
		'products' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_winetreatment_domain_model_product',
				'foreign_class' => 'Tx_WineTreatment_Domain_Model_Product',
				'foreign_table_where' => ' AND ###THIS_UID### = tx_winetreatment_domain_model_product.category order by tx_winetreatment_domain_model_product.name',
				'MM' => 'tx_winetreatment_category_product_mm',
				'size' => 5,
				'minitems' => 0,
				'maxitems' => 99,
				'wizards' => array(
					'_PADDING' => 3,
					'_VERTICAL' => 1,
					'_POSITION' => 'left',
					'edit' => array(
						'type' => 'popup',
						'title' => 'Auswahl bearbeiten',
						'script' => 'wizard_edit.php',
						'popup_onlyOpenIfSelected' => 1,
						'icon' => 'edit2.gif',
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1'
					),
					'add' => array(
						'type' => 'script',
						'title' => 'neues Produkt anlegen',
						'icon' => 'add.gif',
						'script' => 'wizard_add.php',
						'params' => array(
							'table' => 'tx_winetreatment_domain_model_product',
							'pid' => '###CURRENT_PID###',
							'category' => '###THIS_UID###',
							'setValue' => 'prepend',
						),
					),
				),
			),
		),
**/
	),
	'types' => array(
		0 => array(
			'showitem' => '--div--;LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tab_general,hidden;;1, name, products, --div--;LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tab_other, url, gvo_valid'
		),
	),
	'palettes' => array(
		1 => array(
			'showitem' => ''
		),
	),
);

