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
	 * @var Tx_Extbase_Persistence_ObjectStorage
	 */
	protected $products;

	/**
	 * Constructs this category
	 *
	 * @return
	 */
	public function __construct() {
		$this->products = new Tx_Extbase_Persistence_ObjectStorage();
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
		$this->products->attach($product);
	}

	/**
	 * Removes a product from this category
	 *
	 * @param Tx_WineTreatment_Domain_Model_Product $productToRemove
	 * @return void
	 */
	public function removeProduct(Tx_WineTreatment_Domain_Model_Product $productToRemove) {
		$this->products->detach($productToRemove);
	}

	/**
	 * Removes all products from this category
	 *
	 * @return void
	 */
	public function removeAllProducts() {
		$this->products = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns all products in this category
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getProducts() {
		return clone $this->products;
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

