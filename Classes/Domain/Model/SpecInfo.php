<?php

/**
 * A SpecInfo of a product
 *
 * @scope prototype
 * @entity
 */
class Tx_WineTreatment_Domain_Model_SpecInfo extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var int
	 */
	protected $tstamp;

	/**
	 * @var int The uid of the product the specinfo is related to
	 */
	protected $product;

	/**
	 * @var string
	 */
	protected $information = '';

	/**
	 * Constructs this SpecInfo
	 *
	 * @return
	 */
	public function __construct() {
	}

	/**
	 * Sets the time, when specinfo was last altered
	 *
	 * @param int $tstamp
	 * @return void
	 */
	public function setTstamp($tstamp) {
		$this->tstamp = $tstamp;
	}

	/**
	 * Gets the time, when specinfo was last altered
	 *
	 * @return int The alter-date
	 */
	public function getTstamp() {
		return $this->tstamp;
	}

	/**
	 * Sets the uid of the product this specinfo is related to
	 *
	 * @param int $product The product uid this specinfo is part of
	 * @return void
	 */
	public function setProduct($product) {
		$this->product = $product;
	}

	/**
	 * Returns the uid of the product this specinfo is related to
	 *
	 * @return int The product uid this specinfo is part of
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
	 * Sets the information
	 *
	 * @param string $information
	 * @return void
	 */
	public function setInformation($information) {
		$this->information = $information;
	}

	/**
	 * Gets the information
	 *
	 * @return string
	 */
	public function getInformation() {
		return $this->information;
	}

	/**
	 * Returns this specinfo as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'SpecInfo: ' . $this->uid . ' for Product-Uid: ' . $this->product;
	}

}

