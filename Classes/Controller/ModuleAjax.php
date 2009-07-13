<?php

class Tx_WineTreatment_Controller_ModuleAjax {

	protected $command = '';

	protected $additionalData = array();

	protected $content = '';

	public function init() {
		$this->mapCommand();
		$this->getContent();
	}

	protected function mapCommand() {
		$this->command = t3lib_div::_GP('cmd');
		$this->additionalData['uid'] = t3lib_div::_GP('startUid');
		$this->additionalData['node'] = t3lib_div::_GP('node');

		if (!is_string($this->command)) {
			return false;
		}

		$this->createContent();
	}

	protected function createContent() {
		$str = '';

		switch ($this->command) {
			case 'nav_click':
				$subArr = explode('-', $this->additionalData['node']);

				switch ($subArr[0]) {
					case 'cat':

						if ($subArr[1] == 'new') {
							$output['form'] = 'cat-form';
							$output['cat-form']['cat-name'] = '';
							$output['cat-form']['cat-url'] = '';
							$output['cat-form']['cat-gvo_valid'] = date('d.m.Y');
							$output['cat-form']['cat-uid'] = 'new';
						} else {
							$categories = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
								'uid,name,url,gvo_valid',
								'tx_winetreatment_domain_model_category',
								'uid=' . $subArr[1]
							);
							$output['form'] = 'cat-form';
							$output['cat-form']['cat-name'] = $categories[0]['name'];
							$output['cat-form']['cat-url'] = $categories[0]['url'];
							$output['cat-form']['cat-gvo_valid'] = date('d.m.Y', $categories[0]['gvo_valid']);
							$output['cat-form']['cat-uid'] = $categories[0]['uid'];
						}

						break;
				}

				$str = json_encode($output);
				break;
			case 'navigation':

				if ($this->additionalData['node'] == 'source') {
					$output[] = array(
						'id' => 'cat-new',
						'text' => 'Neue Kategorie',
						'leaf' => true,
					);
					$categories = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
						'uid,name',
						'tx_winetreatment_domain_model_category',
						'pid=' . $this->additionalData['uid'] . ' AND deleted=0 AND hidden=0',
						'',
						'name',
						'',
						'uid'
					);

					foreach ($categories as $category) {
						$output[] = array(
							'id' => 'cat-' . $category['uid'],
							'text' => $category['name'],
						);
					}

				} else {
					$subArr = explode('-', $this->additionalData['node']);

					switch ($subArr[0]) {
						case 'cat':
							$output[] = array(
								'id' => 'pro-new',
								'text' => 'Neues Produkt',
								'leaf' => true,
							);
							$products = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
								'uid,name',
								'tx_winetreatment_domain_model_product',
								'category=' . $subArr[1] . ' AND deleted=0 AND hidden=0',
								'',
								'name',
								'',
								'uid'
							);

							foreach ($products as $product) {
								$output[] = array(
									'id' => 'pro-' . $product['uid'],
									'text' => $product['name'],
								);
							}

							break;
						case 'pro':
							$output[] = array(
								'id' => 'sin-new',
								'text' => 'Neue Spezial Info',
								'leaf' => true,
							);
							$specInfos = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
								'uid,crdate',
								'tx_winetreatment_domain_model_specinfo',
								'product=' . $subArr[1] . ' AND deleted=0 AND hidden=0',
								'',
								'crdate',
								'',
								'uid'
							);

							foreach ($specInfos as $specInfo) {
								$output[] = array(
									'id' => 'sin-' . $specInfo['uid'],
									'text' => date('d.m.Y', $specInfo['crdate']),
									'leaf' => true,
								);
							}

							break;
					}

				}

				$str = json_encode($output);
				break;
		}

		$this->content = $str;
	}

	protected function getContent() {
		echo $this->content;
	}

}

