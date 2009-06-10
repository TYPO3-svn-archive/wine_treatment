<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'A Wine Treatment Catalogue',
	'description' => 'A Catalogue to display wine treatment products',
	'category' => 'plugin',
	'author' => 'Joerg Schoppet',
	'author_email' => 'joerg(at)schoppet(dot)de',
	'shy' => '',
	'dependencies' => 'dam,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_winetreatment/rte/',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.2',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3dev-4.3.99',
			'extbase' => '0.0.0-0.0.0',
			'fluid' => '0.0.0-0.0.0',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);

?>
