<?php

/**
 * A Category
 *
 * @scope prototype
 * @entity
 */
class Tx_WineTreatment_Domain_Model_Category extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Modification date
	 *
	 * @var int
	 */
	protected $tstamp;

	/**
	 * The category name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * An URL
	 *
	 * @var string
	 */
	protected $url = '';

	/**
	 * The valid date for GVO
	 *
	 * @var int
	 */
	protected $gvoValid = 0;

	/**
	 * The products contained in this category
	 *
	 * @var array
	 */
	protected $products = array();

	/**
	 * Constructs this category
	 *
	 * @return
	 */
	public function __construct() {
	}

	/**
	 * Gets the modification date
	 *
	 * @return int
	 */
	public function getTstamp() {
		return $this->tstamp;
	}

	/**
	 * Sets the modification date
	 *
	 * @param int $tstamp
	 * @return void
	 */
	public function setTstamp($tstamp) {
		$this->tstamp = $tstamp;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Gets the name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the URL
	 *
	 * @param string $url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

	/**
	 * Gets the URL
	 *
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets the GVO Valid Date
	 *
	 * @param int $gvoValid
	 * @return void
	 */
	public function setGvoValid($gvoValid) {
		$this->gvoValid = $gvoValid;
	}

	/**
	 * Gets the GVO Valid Date
	 *
	 * @return int
	 */
	public function getGvoValid() {
		return $this->gvoValid;
	}

	/**
	 * Adds a product to this category
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $product
	 * @return void
	 */
	public function addProduct(Tx_WineTreatment_Domain_Model_Product $product) {
		$this->products[] = $products;
	}

	/**
	 * Removes a product from this category
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $productToRemove
	 * @return void
	 */
	public function removeProduct(Tx_WineTreatment_Domain_Model_Product $productToRemove) {

		foreach ($this->products as $key => $product) {

			if ($product === $productToRemove) {
				unset($this->products[$key]);
				reset($this->products);
				return;
			}

		}

	}

	/**
	 * Removes all products from this category
	 *
	 * @return void
	 */
	public function removeAllProducts() {
		$this->products = array();
	}

	/**
	 * Returns all products in this category
	 *
	 * @return array of Tx_WineTreatment_Domain_Model_Product
	 */
	public function getProducts() {
		return $this->products;
	}

	/**
	 * Returns single product by its identifier
	 *
	 * @param int $uid
	 * @return Tx_WineTreatment_Domain_Model_Product or NULL if not found
	 */
	public function findProductByUid($uid) {

		if (array_key_exists($uid, $this->products)) {
			return $this->products[$uid];
		} else {
			return NULL;
		}

	}

	/**
	 * Returns single product by name
	 *
	 * @param string $productName
	 * @return Tx_WineTreatment_Domain_Model_Product or NULL if not found
	 */
	public function findProductByName($productName) {

		foreach ($this->products as $product) {

			if (strtolower($product->getName()) === strtolower($productName)) {
				return $product;
			}

		}

		return NULL;
	}

	/**
	 * Returns the number of products in this category
	 *
	 * @return int Number of products
	 */
	public function getProductCount() {
		return count($this->products);
	}

	/**
	 * Returns this category as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'Category: ' . $this->uid . ': ' . $this->name;
	}

}

