<?php

/**
 * The export controller for the WineTreatment package
 */
class Tx_WineTreatment_Controller_ExportController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_WineTreatment_Domain_Repository_CategoryRepository
	 */
	protected $categoryRepository;

	/**
	 * @var Tx_WineTreatment_Domain_Repository_ProductRepository
	 */
	protected $productRepository;

	/**
	 * @var Tx_JrRemoteAccess_Domain_Service_AuthenticationService
	 */
	protected $authenticationService;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		$this->categoryRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Repository_CategoryRepository');
		$this->productRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Repository_ProductRepository');
		$this->authenticationService = t3lib_div::makeInstance('Tx_JrRemoteAccess_Domain_Service_AuthenticationService');
	}

	/**
	 * list action for this controller. Returns all categories
	 *
	 * @return string The rendered view
	 */
	public function listAction() {
		$allowed = FALSE;

		if ($this->request->hasArgument('customer') && $this->request->hasArgument('apiKey')) {
			$allowed = $this->authenticationService->authenticate(
				$this->request->getArgument('customer'),
				$this->request->getArgument('apiKey')
			);
		}

		if (!$allowed) {
			$this->view->assign('error', 'Authentication problem');
		} else {
			$this->view->assign('categories', $this->categoryRepository->findAll());
			$this->view->assign('host', t3lib_div::getIndpEnv('TYPO3_SITE_URL'));
		}

	}

	/**
	 * Shows all products of a specific category
	 *
	 * @return string The rendered view
	 */
	public function detailAction() {

		if ($this->request->hasArgument('customer') && $this->request->hasArgument('apiKey') && $this->request->hasArgument('category')) {
			$allowed = FALSE;

			if ($this->request->hasArgument('customer') && $this->request->hasArgument('apiKey')) {
				$allowed = $this->authenticationService->authenticate(
					$this->request->getArgument('customer'),
					$this->request->getArgument('apiKey')
				);
			}

			if (!$allowed) {
				$this->view->assign('error', 'Authentication problem');
			} else {
				$category = $this->categoryRepository->findOneByName(
					$this->request->getArgument('category')
				);
				$this->view->assign(
					'products',
					$this->modifyProducts(
						$this->request->getArgument('customer'),
						$this->productRepository->findByCategory($category)
					)
				);
				$this->view->assign('host', t3lib_div::getIndpEnv('TYPO3_SITE_URL'));
			}

		} else {
			$this->view->assign('error', 'Parameter problem');
		}

	}

	/**
	 * Modifies the products dependend on the access
	 *
	 * @param string $username
	 * @param array $products
	 * @return array
	 */
	protected function modifyProducts($username, array $products) {
		$customerRepository = t3lib_div::makeInstance('Tx_JrRemoteAccess_Domain_Repository_CustomerRepository');
		$customer = $customerRepository->findOneByName($username);
		$accessRepository = t3lib_div::makeInstance('Tx_WineTreatment_Domain_Repository_AccessRepository');
		$access = $accessRepository->findOneByCustomer($customer);

		foreach ($access->getTables() as $table) {
			$name = $table->getName();
			$method = 'removeAll' . $name;

			foreach ($products as $key => $product) {
				$product->$method();
				$products[$key] = $product;
			}

		}

		return $products;
	}

}

?>
