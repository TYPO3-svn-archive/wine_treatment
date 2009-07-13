<?php

class tx_winetreatment_menuitem_procfuncs {

	public function createCategoryMenuItems($menuArr, $conf) {
/**

		if ($conf['parentObj']->id == $conf['productPid']) {
			$this->categoryRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Model_CategoryRepository');
			$categories = $this->categoryRepository->getOrdered();

			foreach ($categories as $category) {
				$queryParams = '&tx_winetreatment_pi1[category][uid]=' . (integer)$category->getUid();
				$queryParams .= '&tx_winetreatment_pi1[controller]=Category';
				$queryParams .= '&tx_winetreatment_pi1[action]=show';
				$queryParams .= '&cHash=' . t3lib_div::shortMD5(serialize(t3lib_div::cHashParams($queryParams)));
				$item = array(
					'uid' => $conf['productPid'],
					'title' => $category->getName(),
					'_ADD_GETVARS' => $queryParams,
					$item['ITEM_STATE'] = 'NO',
				);
				$menuArr[] = $item;
			}

		}

		if (t3lib_extMgm::isLoaded('zefueg_dealer')) {

			if ($conf['parentObj']->id == $conf['dealerPid']) {
				$this->regionRepository = t3lib_div::makeInstance('Tx_ZefuegDealer_Domain_Model_RegionRepository');
				$regions = $this->regionRepository->getOrdered();
var_dump($regions);
die();

				foreach ($regions as $region) {
					$queryParams = '&tx_zefuegdealer_pi1[region][uid]=' . (integer)$region->getUid();
					$queryParams .= '&tx_zefuegdealer_pi1[controller]=Region';
					$queryParams .= '&tx_zefuegdealer_pi1[action]=show';
					$queryParams .= '&cHash=' . t3lib_div::shortMD5(serialize(t3lib_div::cHashParams($queryParams)));
					$item = array(
						'uid' => $conf['dealerPid'],
						'title' => $region->getName(),
						'_ADD_GETVARS' => $queryParams,
						$item['ITEM_STATE'] = 'NO',
					);
					$menuArr[] = $item;
				}

			}

		}
**/

		return $menuArr;
	}

}

