<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configureDispatcher(
	'WineTreatment',
	'Pi1',
	array(
		'Category' => 'index,show,gvoPdf',
		'Product' => 'si,ti,gvo,alg,sdb,tiPdf,algPdf,siPdf',
	),
	array(
		'Category' => 'index,show,gvoPdf',
		'Product' => 'si,ti,gvo,alg,sdb,tiPdf,algPdf,siPdf',
	)
);

$TYPO3_CONF_VARS['FE']['eID_include']['pdf'] = 'EXT:wine_treatment/Resources/Private/PHP/eidPdf.php';

t3lib_extMgm::addPageTSConfig('

	# *******************************************************************************************
	# CONFIGURATION of RTE in table "tx_winetreatment_domain_model_specinfo", field "information"
	# *******************************************************************************************
RTE.config.tx_winetreatment_domain_model_specinfo.information {
  hidePStyleItems = H1, H2, H3, H4, H5, H6
  proc.exitHTMLparser_db = 1
  proc.exitHTMLparser_db {
    keepNonMatchedTags = 1
    tags.font.allowAttrib = color
    tags.font.rmTagifNoAttrib = 1
    tags.font.nesting = global
  }
}
');

t3lib_extMgm::addPageTSConfig('

	# *******************************************************************************************
	# CONFIGURATION of RTE in table "tx_winetreatment_domain_model_product", field "description"
	# *******************************************************************************************
RTE.config.tx_winetreatment_domain_model_product.description {
  hidePStyleItems = H1, H2, H3, H4, H5, H6
  proc.exitHTMLparser_db = 1
  proc.exitHTMLparser_db {
    keepNonMatchedTags = 1
    tags.font.allowAttrib = color
    tags.font.rmTagifNoAttrib = 1
    tags.font.nesting = global
  }
}
');

t3lib_extMgm::addPageTSConfig('

	# *******************************************************************************************
	# CONFIGURATION of RTE in table "tx_winetreatment_domain_model_product", field "ti_usage"
	# *******************************************************************************************
RTE.config.tx_winetreatment_domain_model_product.ti_usage {
  hidePStyleItems = H1, H2, H3, H4, H5, H6
  proc.exitHTMLparser_db = 1
  proc.exitHTMLparser_db {
    keepNonMatchedTags = 1
    tags.font.allowAttrib = color
    tags.font.rmTagifNoAttrib = 1
    tags.font.nesting = global
  }
}
');

t3lib_extMgm::addPageTSConfig('

	# *******************************************************************************************
	# CONFIGURATION of RTE in table "tx_winetreatment_domain_model_product", field "ti_dosage"
	# *******************************************************************************************
RTE.config.tx_winetreatment_domain_model_product.ti_dosage {
  hidePStyleItems = H1, H2, H3, H4, H5, H6
  proc.exitHTMLparser_db = 1
  proc.exitHTMLparser_db {
    keepNonMatchedTags = 1
    tags.font.allowAttrib = color
    tags.font.rmTagifNoAttrib = 1
    tags.font.nesting = global
  }
}
');

t3lib_extMgm::addPageTSConfig('

	# *******************************************************************************************
	# CONFIGURATION of RTE in table "tx_winetreatment_domain_model_product", field "ti_property"
	# *******************************************************************************************
RTE.config.tx_winetreatment_domain_model_product.ti_property {
  hidePStyleItems = H1, H2, H3, H4, H5, H6
  proc.exitHTMLparser_db = 1
  proc.exitHTMLparser_db {
    keepNonMatchedTags = 1
    tags.font.allowAttrib = color
    tags.font.rmTagifNoAttrib = 1
    tags.font.nesting = global
  }
}
');

t3lib_extMgm::addPageTSConfig('

	# *******************************************************************************************
	# CONFIGURATION of RTE in table "tx_winetreatment_domain_model_product", field "ti_special"
	# *******************************************************************************************
RTE.config.tx_winetreatment_domain_model_product.ti_special {
  hidePStyleItems = H1, H2, H3, H4, H5, H6
  proc.exitHTMLparser_db = 1
  proc.exitHTMLparser_db {
    keepNonMatchedTags = 1
    tags.font.allowAttrib = color
    tags.font.rmTagifNoAttrib = 1
    tags.font.nesting = global
  }
}
');

t3lib_extMgm::addPageTSConfig('

	# *******************************************************************************************
	# CONFIGURATION of RTE in table "tx_winetreatment_domain_model_product", field "ti_quality"
	# *******************************************************************************************
RTE.config.tx_winetreatment_domain_model_product.ti_quality {
  hidePStyleItems = H1, H2, H3, H4, H5, H6
  proc.exitHTMLparser_db = 1
  proc.exitHTMLparser_db {
    keepNonMatchedTags = 1
    tags.font.allowAttrib = color
    tags.font.rmTagifNoAttrib = 1
    tags.font.nesting = global
  }
}
');

t3lib_extMgm::addPageTSConfig('

	# *******************************************************************************************
	# CONFIGURATION of RTE in table "tx_winetreatment_domain_model_product", field "alg_text"
	# *******************************************************************************************
RTE.config.tx_winetreatment_domain_model_product.alg_text {
  hidePStyleItems = H1, H2, H3, H4, H5, H6
  proc.exitHTMLparser_db = 1
  proc.exitHTMLparser_db {
    keepNonMatchedTags = 1
    tags.font.allowAttrib = color
    tags.font.rmTagifNoAttrib = 1
    tags.font.nesting = global
  }
}
');

