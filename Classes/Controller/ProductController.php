<?php

/**
 * The product controller for the wine treatment package
 */
class Tx_WineTreatment_Controller_ProductController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_WineTreatment_Domain_Model_ProductRepository
	 */
	protected $productRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		$this->productRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Model_ProductRepository');
	}

	/**
	 * List action for this controller. Displays a product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function indexAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->view->assign('product', $product);
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
	 * Shows the SI as HTML
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function siAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->view->assign('product', $product);
	}

	/**
	 * Shows the TI as HTML
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function tiAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->view->assign('product', $product);
	}

	/**
	 * Shows the GVO as HTML
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function gvoAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->view->assign('product', $product);
	}

	/**
	 * Shows the ALG as HTML
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function algAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->view->assign('product', $product);
	}

	/**
	 * Shows the SDB as HTML
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product The product to show
	 * @return string
	 */
	public function sdbAction(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->view->assign('product', $product);
	}

}

