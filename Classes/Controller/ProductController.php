<?php

/**
 * The product controller for the wine treatment package
 */
class Tx_WineTreatment_Controller_ProductController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_WineTreatment_Domain_Repository_ProductRepository
	 */
	protected $productRepository;

	/**
	 * @var Tx_WineTreatment_Domain_Repository_CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
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
			&& is_array($this->settings['controllers']['Product'])
			&& isset($this->settings['controllers']['Product']['stylesheet'])
			&& '' != $this->settings['controllers']['Product']['stylesheet']) {
			$stylesheet = str_replace('EXT:', t3lib_extMgm::siteRelPath('wine_treatment'), $this->settings['controllers']['Product']['stylesheet']);
			$this->response->addAdditionalHeaderData('<link rel="stylesheet" href="' . $stylesheet . '" />');
		}

	}

	/**
	 * Sets the title based on the specific product
	 *
	 * @param array
	 * @return void
	 */
	protected function setTitle(array $titleParts) {

		if ($GLOBALS['TSFE']->config['config']['noPageTitle'] == 2) {
			$titleTagContent = $GLOBALS['TSFE']->tmpl->printTitle(
				$GLOBALS['TSFE']->altPageTitle?$GLOBALS['TSFE']->altPageTitle:$GLOBALS['TSFE']->page['title'],
				0,
				$GLOBALS['TSFE']->config['config']['pageTitleFirst']
			);

			if ($GLOBALS['TSFE']->config['config']['titleTagFunction'])     {
				$titleTagContent = $GLOBALS['TSFE']->cObj->callUserFunction($GLOBALS['TSFE']->config['config']['titleTagFunction'], array(), $titleTagContent);
			}

			$originalTitleParts = explode('|', $titleTagContent);
			$finalTagParts = array();

			foreach ($originalTitleParts as $titlePart) {
				$finalTagParts[] = trim($titlePart);
			}

			$finalTagParts = array_merge($finalTagParts, $titleParts);
			$finalTag = implode(' | ', $finalTagParts);
			$this->response->addAdditionalHeaderData('<title>' . htmlspecialchars($finalTag) . '</title>');
		}

	}

	/**
	 * List action for this controller. Displays a product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function indexAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->setStylesheet();
		$this->view->assign('product', $product);
	}

	/**
	 * Shows the Si as PDF
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function siPdfAction(Tx_WineTreatment_Domain_Model_Product $product) {
	}

	/**
	 * Shows the Ti as PDF
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function tiPdfAction(Tx_WineTreatment_Domain_Model_Product $product) {
	}

	/**
	 * Shows the ALG as PDF
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function algPdfAction(Tx_WineTreatment_Domain_Model_Product $product) {
	}

	/**
	 * Shows the SI as HTML
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function siAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->setTitle(array($product->getName(), 'Spezielle Informationen'));
		$this->setStylesheet();
		$this->categoryRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Repository_CategoryRepository');
		$category = $this->categoryRepository->findByUid((int)$product->getCategory());
		$this->view->assign('product', $product);
		$this->view->assign('category', $category);
	}

	/**
	 * Shows the TI as HTML
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function tiAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->setTitle(array($product->getName(), 'Technische Information'));
		$this->setStylesheet();
		$this->categoryRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Repository_CategoryRepository');
		$category = $this->categoryRepository->findByUid((int)$product->getCategory());
		$this->view->assign('product', $product);
		$this->view->assign('category', $category);
	}

	/**
	 * Shows the GVO as HTML
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function gvoAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->setTitle(array($product->getName(), 'Gentechnik Erklärung'));
		$this->setStylesheet();
		$this->categoryRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Repository_CategoryRepository');
		$category = $this->categoryRepository->findByUid((int)$product->getCategory());
		$this->view->assign('product', $product);
		$this->view->assign('category', $category);
	}

	/**
	 * Shows the ALG as HTML
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function algAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->setTitle(array($product->getName(), 'Allergene'));
		$this->setStylesheet();
		$this->categoryRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Repository_CategoryRepository');
		$category = $this->categoryRepository->findByUid((int)$product->getCategory());
		$this->view->assign('product', $product);
		$this->view->assign('category', $category);
	}

	/**
	 * Shows the SDB as HTML
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function sdbAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->setTitle(array($product->getName(), 'Sicherheitsdatenblatt'));
		$this->setStylesheet();
		$this->view->assign('product', $product);
	}

}

