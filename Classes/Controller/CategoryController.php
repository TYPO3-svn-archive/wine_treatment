<?php

/**
 * The category controller for the WineTreatment package
 */
class Tx_WineTreatment_Controller_CategoryController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_WineTreatment_Domain_Model_CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		$this->categoryRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Model_CategoryRepository');
	}

	/**
	 * Index action for this controller. Display a list of categories.
	 *
	 * @return string The rendered view
	 */
	public function indexAction() {
		$this->view->assign('categories', $this->categoryRepository->findAll());
	}

	/**
	 * Shows a single category
	 *
	 * @param Tx_WineTreatment_Domain_Model_Category $category The category to show
	 * @return string The rendered view of a single category
	 */
	public function showAction(Tx_WineTreatment_Domain_Model_Category $category) {
/**
		$GLOBALS['TSFE']->page['title'] = 'hallo';
		$GLOBALS['TSFE']->altPageTitle = 'hallo';
		$GLOBALS['TSFE']->indexedDocTitle = 'hallo';
**/
		$this->view->assign('category', $category);
	}

}

