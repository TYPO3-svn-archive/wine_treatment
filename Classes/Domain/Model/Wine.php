<?php

/**
 * A Wine
 *
 * @scope prototype
 * @entity
 */
class Tx_WineTreatment_Domain_Model_Wine extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 */
	protected $name = '';

	/**
	 * @var string
	 */
	protected $icon;

	/**
	 * Constructs this wine
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
	 * Returns this Wine as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'Wine: ' . $this->uid . ': ' . $this->name;
	}

}

