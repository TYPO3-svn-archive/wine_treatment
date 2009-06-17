<?php

/**
 * A Product
 *
 * @scope prototype
 * @entity
 */
class Tx_WineTreatment_Domain_Model_Product extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Creation Date
	 *
	 * @var int
	 */
	protected $crdate = 0;

	/**
	 * Modification Date
	 *
	 * @var int
	 */
	protected $tstamp = 0;

	/**
	 * The name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * A short description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * The uid of the category
	 *
	 * @var int
	 */
	protected $category = 0;

	/**
	 * The list of special informations
	 *
	 * @var array
	 */
	protected $specialInformation = array();

	/**
	 * Defines if this product has a GVO
	 *
	 * @var int
	 */
	protected $gvo = 0;

	/**
	 * The security datasheet
	 *
	 * @var string
	 */
	protected $sdb = '';

	/**
	 * The possibilities for ALG Directive 2003/89/EC
	 *
	 * @var int
	 */
	protected $algDirective = 0;

	/**
	 * The text for ALG Directive 2003/89/EC
	 *
	 * @var string
	 */
	protected $algDirectiveText = '';

	/**
	 * The possibilities for ALG ALBA-List
	 *
	 * @var int
	 */
	protected $algAlba = 0;

	/**
	 * The text for ALG ALBA-List
	 *
	 * @var string
	 */
	protected $algAlbaText = '';

	/**
	 * The version of ALG
	 *
	 * @var double
	 */
	protected $algVersion = 0.00;

	/**
	 * The list of wine
	 *
	 * @var array of Tx_WineTreatment_Domain_Model_Wine
	 */
	protected $wine = array();

	/**
	 * The list of usages
	 *
	 * @var array of Tx_WineTreatment_Domain_Model_Usage
	 */
	protected $usages = array();

	/**
	 * The list of functions
	 *
	 * @var array of Tx_WineTreatment_Domain_Model_Function
	 */
	protected $functions = array();

	/**
	 * The TI usage
	 *
	 * @var string
	 */
	protected $tiUsage = '';

	/**
	 * The TI dosage
	 *
	 * @var string
	 */
	protected $tiDosage = '';

	/**
	 * The TI property
	 *
	 * @var string
	 */
	protected $tiProperty = '';

	/**
	 * The TI special
	 *
	 * @var string
	 */
	protected $tiSpecial = '';

	/**
	 * The TI storage
	 *
	 * @var string
	 */
	protected $tiStorage = '';

	/**
	 * The TI quality
	 *
	 * @var string
	 */
	protected $tiQuality = '';

	/**
	 * The TI version
	 *
	 * @var double
	 */
	protected $tiVersion = 0.00;

	/**
	 * Constructs this product
	 */
	public function __construct() {
	}

	/**
	 * Sets the creation date
	 *
	 * @param int $crdate
	 * @return void
	 */
	public function setCrdate($crdate) {
		$this->crdate = $crdate;
	}

	/**
	 * Gets the creation date
	 *
	 * @return int
	 */
	public function getCrdate() {
		return $this->crdate;
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
	 * Gets the modification date
	 *
	 * @return void
	 */
	public function getTstamp() {
		return $this->tstamp;
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
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Gets the description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the TI Usage
	 *
	 * @param string $tiUsage
	 * @return void
	 */
	public function setTiUsage($tiUsage) {
		$this->tiUsage = $tiUsage;
	}

	/**
	 * Gets the TI Usage
	 *
	 * @return string
	 */
	public function getTiUsage() {
		return $this->tiUsage;
	}

	/**
	 * Sets the TI Dosage
	 *
	 * @param string $tiDosage
	 * @return void
	 */
	public function setTiDosage($tiDosage) {
		$this->tiDosage = $tiDosage;
	}

	/**
	 * Gets the TI Dosage
	 *
	 * @return string
	 */
	public function getTiDosage() {
		return $this->tiDosage;
	}

	/**
	 * Sets the TI Property
	 *
	 * @param string $tiProperty
	 * @return void
	 */
	public function setTiProperty($tiProperty) {
		$this->tiProperty = $tiProperty;
	}

	/**
	 * Gets the TI Property
	 *
	 * @return string
	 */
	public function getTiProperty() {
		return $this->tiProperty;
	}

	/**
	 * Sets the TI Special
	 *
	 * @param string $tiSpecial
	 * @return void
	 */
	public function setTiSpecial($tiSpecial) {
		$this->tiSpecial = $tiSpecial;
	}

	/**
	 * Gets the TI Special
	 *
	 * @return string
	 */
	public function getTiSpecial() {
		return $this->tiSpecial;
	}

	/**
	 * Sets the TI Storage
	 *
	 * @param string $tiStorage
	 * @return void
	 */
	public function setTiStorage($tiStorage) {
		$this->tiStorage = $tiStorage;
	}

	/**
	 * Gets the TI Storage
	 *
	 * @return string
	 */
	public function getTiStorage() {
		return $this->tiStorage;
	}

	/**
	 * Sets the TI Quality
	 *
	 * @param string $tiQuality
	 * @return void
	 */
	public function setTiQuality($tiQuality) {
		$this->tiQuality = $tiQuality;
	}

	/**
	 * Gets the TI Quality
	 *
	 * @return string
	 */
	public function getTiQuality() {
		return $this->tiQuality;
	}

	/**
	 * Sets the TI Version
	 *
	 * @param double $tiVersion
	 * @return void
	 */
	public function setTiVersion($tiVersion) {
		$this->tiVersion = $tiVersion;
	}

	/**
	 * Gets the TI Version
	 *
	 * @return double
	 */
	public function getTiVersion() {
		return $this->tiVersion;
	}

	/**
	 * Sets the GVO
	 *
	 * @param int $gvo
	 * @return void
	 */
	public function setGvo($gvo) {
		$this->gvo = $gvo;
	}

	/**
	 * Gets the GVO
	 *
	 * @return bool
	 */
	public function getGvo() {
		return (bool)$this->gvo;
	}

	/**
	 * Sets the ALG Directive 2003/89/EC
	 *
	 * @param int $algDirective
	 * @return void
	 */
	public function setAlgDirective($algDirective) {
		$this->algDirective = $algDirective;
	}

	/**
	 * Gets the ALG Directive 2003/89/EC
	 *
	 * @return int
	 */
	public function getAlgDirective() {
		return $this->algDirective;
	}

	/**
	 * Sets the ALG ALBA-List
	 *
	 * @param int $algAlba
	 * @return void
	 */
	public function setAlgAlba($algAlba) {
		$this->algAlba = $algAlba;
	}

	/**
	 * Gets the ALG ALBA-List
	 *
	 * @return int
	 */
	public function getAlgAlba() {
		return $this->algAlba;
	}

	/**
	 * Sets the ALG Directive 2003/89/EC Text
	 *
	 * @param string $algDirectiveText
	 * @return void
	 */
	public function setAlgDirectiveText($algDirectiveText) {
		$this->algDirectiveText = $algDirectiveText;
	}

	/**
	 * Gets the ALG ALBA-List Text
	 *
	 * @return string
	 */
	public function getAlgAlbaText() {
		return $this->algAlbaText;
	}

	/**
	 * Sets the ALG ALBA Text
	 *
	 * @param string $algAlbaText
	 * @return void
	 */
	public function setAlgAlbaText($algAlbaText) {
		$this->algAlbaText = $algAlbaText;
	}

	/**
	 * Gets the ALG Directive-List Text
	 *
	 * @return string
	 */
	public function getAlgDirectiveText() {
		return $this->algDirectiveText;
	}

	/**
	 * Sets the ALG Version
	 *
	 * @param double $algVersion
	 * @return void
	 */
	public function setAlgVersion($algVersion) {
		$this->alg_version = $algVersion;
	}

	/**
	 * Gets the ALG Version
	 *
	 * @return double
	 */
	public function getAlgVersion() {
		return $this->alg_version;
	}

	/**
	 * Sets the SDB
	 *
	 * @param string $sdb
	 * @return void
	 */
	public function setSdb($sdb) {
		$this->sdb = $sdb;
	}

	/**
	 * Gets the SDB
	 *
	 * @return string
	 */
	public function getSdb() {
		return $this->sdb;
	}

	/**
	 * Sets the uid of the category this product is related to
	 *
	 * @param int $category The category uid this product is part of
	 * @return void
	 */
	public function setCategory($category) {
		$this->category = $category;
	}

	/**
	 * Returns the uid of the category this product is related to
	 *
	 * @return int The category uid this product is part of
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Adds a SpecInfo to this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_SpecInfo $specInfo
	 * @return void
	 */
	public function addSpecialInformation(Tx_WineTreatment_Domain_Model_SpecInfo $specInfo) {
		$this->specialInformation[] = $specInfo;
	}

	/**
	 * Removes a SpecInfo from this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_SpecInfo $specInfoToRemove
	 * @return void
	 */
	public function removeSpecialInformation(Tx_WineTreatment_Domain_Model_SpecInfo $specInfoToRemove) {

		foreach ($this->specialInformation as $key => $specInfo) {

			if ($specInfo === $specInfoToRemove) {
				unset($this->specialInformation[$key]);
				reset($this->specialInformation);
				return;
			}

		}

	}

	/**
	 * Removes all SpecInfo from this product
	 *
	 * @return void
	 */
	public function removeAllSpecialInformation() {
		$this->specialInformation = array();
	}

	/**
	 * Returns all SpecInfo in this product
	 *
	 * @return array of Tx_WineTreatment_Domain_Model_SpecInfo
	 */
	public function getSpecialInformation() {
		return $this->specialInformation;
	}

	/**
	 * Returns single SpecInfo by its identifier
	 *
	 * @param int $uid
	 * @return Tx_WineTreatment_Domain_Model_SpecInfo or NULL of not found
	 */
	public function findSpecialInformationByUid($uid) {

		if (array_key_exists($uid, $this->specialInformation)) {
			return $this->specialInformation[$uid];
		} else {
			return NULL;
		}

	}

	/**
	 * Adds a Wine to this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Wine $wine
	 * @return void
	 */
	public function addWine(Tx_WineTreatment_Domain_Model_Wine $wine) {
		$this->wine[] = $wine;
	}

	/**
	 * Removes a Wine from this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Wine $wineToRemove
	 * @return void
	 */
	public function removeWine(Tx_WineTreatment_Domain_Model_Wine $wineToRemove) {

		foreach ($this->wine as $key => $wine) {

			if ($wine === $wineToRemove) {
				unset($this->wine[$key]);
				reset($this->wine);
				return;
			}

		}

	}

	/**
	 * Removes all Wine from this product
	 *
	 * @return void
	 */
	public function removeAllWine() {
		$this->wine = array();
	}

	/**
	 * Returns all Wine in this product
	 *
	 * @return array of Tx_WineTreatment_Domain_Model_Wine
	 */
	public function getWine() {
		return $this->wine;
	}

	/**
	 * Returns single Wine by its identifier
	 *
	 * @param int $uid
	 * @return Tx_WineTreatment_Domain_Model_Wine or NULL of not found
	 */
	public function findWineByUid($uid) {

		if (array_key_exists($uid, $this->wine)) {
			return $this->wine[$uid];
		} else {
			return NULL;
		}

	}

	/**
	 * Adds a Usage to this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Usage $usage
	 * @return void
	 */
	public function addUsages(Tx_WineTreatment_Domain_Model_Usage $usage) {
		$this->usages[] = $usage;
	}

	/**
	 * Removes a Usage from this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Usage $usageToRemove
	 * @return void
	 */
	public function removeUsages(Tx_WineTreatment_Domain_Model_Usage $usageToRemove) {

		foreach ($this->usages as $key => $usage) {

			if ($usage === $usageToRemove) {
				unset($this->usage[$key]);
				reset($this->usage);
				return;
			}

		}

	}

	/**
	 * Removes all Usage from this product
	 *
	 * @return void
	 */
	public function removeAllUsages() {
		$this->usages = array();
	}

	/**
	 * Returns all Usage in this product
	 *
	 * @return array of Tx_WineTreatment_Domain_Model_Usage
	 */
	public function getUsages() {
		return $this->usages;
	}

	/**
	 * Returns single Usage by its identifier
	 *
	 * @param int $uid
	 * @return Tx_WineTreatment_Domain_Model_Usage or NULL of not found
	 */
	public function findUsagesByUid($uid) {

		if (array_key_exists($uid, $this->usages)) {
			return $this->usages[$uid];
		} else {
			return NULL;
		}

	}

	/**
	 * Adds a Function to this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Function $function
	 * @return void
	 */
	public function addFuntions(Tx_WineTreatment_Domain_Model_Functions $function) {
		$this->functions[] = $function;
	}

	/**
	 * Removes a Function from this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Function $functionToRemove
	 * @return void
	 */
	public function removeFunctions(Tx_WineTreatment_Domain_Model_Function $functionToRemove) {

		foreach ($this->functions as $key => $function) {

			if ($function === $functionToRemove) {
				unset($this->function[$key]);
				reset($this->function);
				return;
			}

		}

	}

	/**
	 * Removes all Function from this product
	 *
	 * @return void
	 */
	public function removeAllFunctions() {
		$this->functions = array();
	}

	/**
	 * Returns all Function in this product
	 *
	 * @return array of Tx_WineTreatment_Domain_Model_Function
	 */
	public function getFunctions() {
		return $this->functions;
	}

	/**
	 * Returns single Function by its identifier
	 *
	 * @param int $uid
	 * @return Tx_WineTreatment_Domain_Model_Function or NULL of not found
	 */
	public function findFunctionsByUid($uid) {

		if (array_key_exists($uid, $this->functions)) {
			return $this->functions[$uid];
		} else {
			return NULL;
		}

	}

	/**
	 * Returns this product as formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return 'Product: ' . $this->uid . ': ' . $this->name;
	}

}

