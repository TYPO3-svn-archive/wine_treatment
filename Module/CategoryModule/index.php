<?php

include_once(t3lib_extMgm::extPath('wine_treatment', 'Classes/Controller/CategoryModuleController.php'));

$LANG->includeLLFile('EXT:wine_treatment/Resources/Private/Language/locallang_mod.xml');
$BE_USER->modAccess($MCONF, 1);

$SOBE = t3lib_div::makeInstance('Tx_WineTreatment_Controller_CategoryModuleController');

foreach ($SOBE->include_once as $INC_FILE) {
	include_once($INC_FILE);
}

$SOBE->main();

