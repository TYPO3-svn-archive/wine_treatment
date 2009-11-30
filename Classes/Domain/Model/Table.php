<?php

/**
 * A table
 *
 * @scope prototype
 * @entity
 */
class Tx_WineTreatment_Domain_Model_Table extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var Tx_WineTreatment_Domain_Model_Access
	 */
	protected $access;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * Constructs this table
	 *
	 * @return
	 */
	public function __construct() {
	}

	/**
	 * Sets the access this table is related to
	 *
	 * @param Tx_WineTreatment_Domain_Model_Access $access
	 * @return void
	 */
	public function setAccess(Tx_WineTreatment_Domain_Model_Access $access) {
		$this->access = $access;
	}

	/**
	 * Returns the access this table is related to
	 *
	 * @return Tx_WineTreatment_Domain_Model_Access
	 */
	public function getAccess() {
		return $this->access;
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
	 * Returns this table as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'Table: ' . $this->uid . ' Name: ' . $this->name;
	}

}

?>
