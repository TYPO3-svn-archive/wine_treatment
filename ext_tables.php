<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	'WineTreatment',
	'Pi1',
	'Wine Treatment Catalogue'
);

t3lib_extMgm::addStaticFile(
	$_EXTKEY,
	'Configuration/TypoScript',
	'Wine Treatment Catalogue'
);

$GLOBALS['TCA']['tx_winetreatment_domain_model_wine'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_wine',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'default_sortby' => 'ORDER BY name',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca_tx_winetreatment_domain_model_wine.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/icon_tx_winetreatment_domain_model_wine.gif',
	),
);

$GLOBALS['TCA']['tx_winetreatment_domain_model_usage'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_usage',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'default_sortby' => 'ORDER BY name',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca_tx_winetreatment_domain_model_usage.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/icon_tx_winetreatment_domain_model_usage.gif',
	),
);

$GLOBALS['TCA']['tx_winetreatment_domain_model_function'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_function',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'default_sortby' => 'ORDER BY name',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca_tx_winetreatment_domain_model_function.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/icon_tx_winetreatment_domain_model_function.gif',
	),
);

$GLOBALS['TCA']['tx_winetreatment_domain_model_specinfo'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_specinfo',
		'label' => 'product',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'default_sortby' => 'ORDER BY product, crdate',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca_tx_winetreatment_domain_model_specinfo.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/icon_tx_winetreatment_domain_model_specinfo.gif',
	),
);

$GLOBALS['TCA']['tx_winetreatment_domain_model_product'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_product',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'default_sortby' => 'ORDER BY name',
		'dividers2tabs' => 1,
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca_tx_winetreatment_domain_model_product.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/icon_tx_winetreatment_domain_model_product.gif',
	),
);

$GLOBALS['TCA']['tx_winetreatment_domain_model_category'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_category',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'versioningWS' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'default_sortby' => 'ORDER BY name',
		'dividers2tabs' => 1,
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca_tx_winetreatment_domain_model_category.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/icon_tx_winetreatment_domain_model_category.gif',
	),
);

$GLOBALS['TCA']['tx_winetreatment_domain_model_access'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_access',
		'label' => 'customer',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'default_sortby' => 'ORDER BY customer',
		'dividers2tabs' => 1,
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca_tx_winetreatment_domain_model_access.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/icon_tx_winetreatment_domain_model_access.gif',
	),
);

$GLOBALS['TCA']['tx_winetreatment_domain_model_table'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:wine_treatment/Resources/Private/Language/locallang_db.xml:tx_winetreatment_domain_model_table',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'default_sortby' => 'ORDER BY name',
		'dividers2tabs' => 1,
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca_tx_winetreatment_domain_model_table.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Images/icon_tx_winetreatment_domain_model_table.gif',
	),
);

if (TYPO3_MODE == 'BE') {
}

