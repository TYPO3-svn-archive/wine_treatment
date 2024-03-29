<?php

/**
 * The category controller for the WineTreatment package
 */
class Tx_WineTreatment_Controller_CategoryController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_WineTreatment_Domain_Repository_CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * @var Tx_WineTreatment_Domain_Repository_ProductRepository
	 */
	protected $productRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		$this->categoryRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Repository_CategoryRepository');
		$this->productRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Repository_ProductRepository');
	}

	/**
	 * Sets the actual stylesheet to the HeaderData
	 *
	 * @return void
	 */
	protected function setStylesheet() {

		if (is_array($this->settings)
			&& is_array($this->settings['controllers'])
			&& is_array($this->settings['controllers']['Category'])
			&& isset($this->settings['controllers']['Category']['stylesheet'])
			&& '' != $this->settings['controllers']['Category']['stylesheet']) {
			$stylesheet = str_replace('EXT:', t3lib_extMgm::siteRelPath('wine_treatment'), $this->settings['controllers']['Category']['stylesheet']);
			$this->response->addAdditionalHeaderData('<link rel="stylesheet" href="' . $stylesheet . '" />');
		}

	}

	/**
	 * Index action for this controller. Display a list of categories.
	 *
	 * @return string The rendered view
	 */
	public function indexAction() {
		$this->setStylesheet();
	}

	/**
	 * Shows a single category
	 *
	 * @param Tx_WineTreatment_Domain_Model_Category $category The category to show
	 * @return string The rendered view of a single category
	 */
	public function showAction(Tx_WineTreatment_Domain_Model_Category $category) {

		if ($GLOBALS['TSFE']->config['config']['noPageTitle'] == 2) {
			$titleTagContent = $GLOBALS['TSFE']->tmpl->printTitle(
				$GLOBALS['TSFE']->altPageTitle?$GLOBALS['TSFE']->altPageTitle:$GLOBALS['TSFE']->page['title'],
				0,
				$GLOBALS['TSFE']->config['config']['pageTitleFirst']
			);

			if ($GLOBALS['TSFE']->config['config']['titleTagFunction'])     {
				$titleTagContent = $GLOBALS['TSFE']->cObj->callUserFunction($GLOBALS['TSFE']->config['config']['titleTagFunction'], array(), $titleTagContent);
			}

			$titleParts = explode('|', $titleTagContent);
			$finalTagParts = array();

			foreach ($titleParts as $titlePart) {
				$finalTagParts[] = trim($titlePart);
			}

			$finalTagParts[] = $category->getName();
			$finalTag = implode(' | ', $finalTagParts);
			$this->response->addAdditionalHeaderData('<title>' . htmlspecialchars($finalTag) . '</title>');
		}

		$this->setStylesheet();
		$this->view->assign('category', $category);
		$this->view->assign('products', $this->productRepository->getOrderedByCategory($category->getUid()));
	}

	/**
	 * Shows the GVO as PDF
	 *
	 * @param Tx_WineTreatment_Domain_Model_Category $category The category to show
	 * @return strung
	 */
	public function gvoPdfAction(Tx_WineTreatment_Domain_Model_Category $category) {
	}

}

