<?php

class tx_winetreatment_menuitem_procfuncs {

	public function createCategoryMenuItems($menuArr, $conf) {

		if ($conf['parentObj']->id == $conf['targetPid']) {
			$this->categoryRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Model_CategoryRepository');
			$categories = $this->categoryRepository->findAll();

			foreach ($categories as $category) {
				$queryParams = '&tx_winetreatment_pi1[category][uid]=' . (integer)$category->getUid();
				$queryParams .= '&tx_winetreatment_pi1[controller]=Category';
				$queryParams .= '&tx_winetreatment_pi1[action]=show';
				$queryParams .= '&cHash=' . t3lib_div::shortMD5(serialize(t3lib_div::cHashParams($queryParams)));
				$item = array(
					'uid' => $conf['targetPid'],
					'title' => $category->getName(),
					'_ADD_GETVARS' => $queryParams,
					$item['ITEM_STATE'] = 'NO',
				);
				$menuArr[] = $item;
			}

		}

		return $menuArr;
	}

}

