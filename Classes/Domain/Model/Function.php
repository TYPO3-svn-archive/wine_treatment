<?php

/**
 * A Function
 *
 * @scope prototype
 * @entity
 */
class Tx_WineTreatment_Domain_Model_Function extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 */
	protected $name = '';

	/**
	 * @var string
	 */
	protected $icon;

	/**
	 * Constructs this function
	 *
	 * @return
	 */
	public function __construct() {
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
	 * Sets the icon
	 *
	 * @param string $icon
	 * @return void
	 */
	public function setIcon($icon) {
		$this->icon = $icon;
	}

	/**
	 * Gets the icon
	 *
	 * @return string
	 */
	public function getIcon() {
		return $this->icon;
	}

	/**
	 * Returns this Function as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'Function: ' . $this->uid . ': ' . $this->name;
	}

}

