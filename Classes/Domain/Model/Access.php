<?php

/**
 * An Access
 *
 * @scope prototype
 * @entity
 */
class Tx_WineTreatment_Domain_Model_Access extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * The remote customer
	 *
	 * @var Tx_JrRemoteAccess_Domain_Model_Customer
	 */
	protected $customer;

	/**
	 * The list of tables
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_WineTreatment_Domain_Model_Table>
	 * @lazy
	 * @cascade remove
	 */
	protected $tables;

	/**
	 * Constructs this access
	 */
	public function __construct() {
		$this->tables = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Sets the remote customer this access is related to
	 *
	 * @param Tx_JrRemoteAccess_Domain_Model_Customer $customer
	 * @return void
	 */
	public function setCustomer(Tx_JrRemoteAccess_Domain_Model_Customer $customer) {
		$this->customer = $customer;
	}

	/**
	 * Returns the remote customer this access is related to
	 *
	 * @return Tx_JrRemoteAccess_Domain_Model_Customer
	 */
	public function getCustomer() {
		return $this->customer;
	}

	/**
	 * Adds a table to this access
	 *
	 * @param Tx_WineTreatment_Domain_Model_Table $table
	 * @return void
	 */
	public function addTable(Tx_WineTreatment_Domain_Model_Table $table) {
		$this->tables->attach($table);
	}

	/**
	 * Removes a table from this access
	 *
	 * @param Tx_WineTreatment_Domain_Model_Table $tableToRemove
	 * @return void
	 */
	public function removeTable(Tx_WineTreatment_Domain_Model_Table $tableToRemove) {
		$this->tables->detach($tableToRemove);
	}

	/**
	 * Removes all Tables from this access
	 *
	 * @return void
	 */
	public function removeAllTables() {
		$this->tables = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns all tables in this access
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getTables() {
		return $this->tables;
	}

	/**
	 * Returns this access as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'Access: ' . $this->uid;
	}

}

?>
