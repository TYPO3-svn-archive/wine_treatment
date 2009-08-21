<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_winetreatment_domain_model_product'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_winetreatment_domain_model_product']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,name,description,url,special_information,ti_usage,ti_dosage,ti_property,ti_special,ti_storage,ti_quality,ti_pdf,ti_version,gvo,bio,alg_directive,alg_directive_text,alg_alba,alg_alba_text,alg_version,sdb,wine,usages,functions,category',
		'maxDBListItems' => 50,
		'maxSingleDBListItems' => 50,
	),
	'feInterface' => $GLOBALS['TCA']['tx_winetreatment_domain_model_product']['feInterface'],
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
				'foreign_table' => 'tx_winetreatment_domain_model_product',
				'foreign_table_where' => 'AND tx_winetreatment_domain_model_product.pid=###CURRENT_PID### AND tx_winetreatment_domain_model_product.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 200,
				'eval' => 'required,trim',
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.description',
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
		'url' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.url',
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
		'special_information' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_specinfo',
			'config' => array(
				'type' => 'inline',
				'foreign_class' => 'Tx_WineTreatment_Domain_Model_SpecInfo',
				'foreign_table' => 'tx_winetreatment_domain_model_specinfo',
				'appearance' => array(
					'collapseAll' => TRUE,
					'expandSingle' => TRUE,
					'newRecordLinkAddTitle' => TRUE,
					'newRecordLinkPosition' => 'top',
				),
				'foreign_field' => 'product',
			),
		),
		'ti_usage' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.ti_usage',
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
		'ti_dosage' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.ti_dosage',
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
		'ti_property' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.ti_property',
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
		'ti_special' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.ti_special',
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
		'ti_storage' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.ti_storage',
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
		'ti_quality' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.ti_quality',
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
		'ti_pdf' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.ti_pdf',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file_reference',
				'allowed' => 'pdf',
				'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
				'uploadfolder' => 'uploads/tx_winetreatment',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'ti_version' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.ti_version',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'max' => 4,
				'checkbox' => 0,
				'eval' => 'double2',
			),
		),
		'gvo' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.gvo',
			'config' => array(
				'type' => 'check',
			),
		),
		'bio' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.bio',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file_reference',
				'allowed' => 'pdf',
				'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
				'uploadfolder' => 'uploads/tx_winetreatment',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'alg_directive' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_directive',
			'config' => array(
				'type' => 'radio',
				'items' => array(
					array(
						'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_directive.0',
						0,
					),
					array(
						'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_directive.1',
						1,
					),
					array(
						'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_directive.2',
						2,
					),
				),
			),
		),
		'alg_directive_text' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_directive_text',
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
		'alg_alba' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_alba',
			'config' => array(
				'type' => 'radio',
				'items' => array(
					array(
						'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_alba.0',
						0,
					),
					array(
						'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_alba.1',
						1,
					),
					array(
						'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_alba.2',
						2,
					),
				),
			),
		),
		'alg_alba_text' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_alba_text',
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
		'alg_version' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.alg_version',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'max' => 4,
				'checkbox' => 0,
				'eval' => 'double2',
			),
		),
		'sdb' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product.sdb',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file_reference',
				'allowed' => 'pdf',
				'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
				'uploadfolder' => 'uploads/tx_winetreatment',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'wine' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_wine',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_class' => 'Tx_WineTreatment_Domain_Model_Wine',
				'foreign_table' => 'tx_winetreatment_domain_model_wine',
				'foreign_table_where' => 'ORDER BY tx_winetreatment_domain_model_wine.name',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
				'MM' => 'tx_winetreatment_product_wine_mm',
			),
		),
		'usages' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_usage',
			'config' => array(
				'type' => 'select',
				'foreign_class' => 'Tx_WineTreatment_Domain_Model_Usage',
				'foreign_table' => 'tx_winetreatment_domain_model_usage',
				'size' => 3,
				'minitems' => 0,
				'maxitems' => 2,
				'MM' => 'tx_winetreatment_product_usage_mm',
			),
		),
		'functions' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_function',
			'config' => array(
				'type' => 'select',
				'foreign_class' => 'Tx_WineTreatment_Domain_Model_Function',
				'foreign_table' => 'tx_winetreatment_domain_model_function',
				'size' => 4,
				'minitems' => 0,
				'maxitems' => 3,
				'MM' => 'tx_winetreatment_product_function_mm',
			),
		),
		'category' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
	'types' => array(
		0 => array(
			'showitem' => '--div--;LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tab_general,hidden;;1, name, description;;;richtext[]:rte_transform[mode=ts_css:imgpath=uploads/tx_winetreatment/rte/], url, --div--;LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_specinfo,special_information, --div--;LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tab_techinfo,ti_usage;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_winetreatment/rte/], ti_dosage;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_winetreatment/rte/], ti_property;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_winetreatment/rte/], ti_special;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_winetreatment/rte/], ti_storage;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_winetreatment/rte/], ti_quality;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_winetreatment/rte/], ti_pdf, ti_version, --div--;LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tab_alg, alg_directive, alg_directive_text;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_winetreatment/rte/], alg_alba, alg_alba_text;;;richtext[]:rte_transform[mode=ts_css|imgpath=uploads/tx_winetreatment/rte/], alg_version, --div--;LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tab_association, wine, usages, functions, --div--;LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tab_other, gvo, bio, sdb',
		),
	),
	'palettes' => array(
		1 => array(
			'showitem' => ''
		),
	),
);

