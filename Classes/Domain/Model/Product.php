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
	 * An URL
	 *
	 * @var string
	 */
	protected $url = '';

	/**
	 * The uid of the category
	 *
	 * @var int
	 */
	protected $category = 0;

	/**
	 * The list of special informations
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_WineTreatment_Domain_Model_SpecInfo>
	 * @lazy
	 * @cascade remove
	 */
	protected $specialInformation;

	/**
	 * Defines if this product has a GVO
	 *
	 * @var int
	 */
	protected $gvo = 0;

	/**
	 * The gvo bio pdf
	 *
	 * @var string
	 */
	protected $bio = '';

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
	 * @var float
	 */
	protected $algVersion = 0.00;

	/**
	 * The list of wine
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_WineTreatment_Domain_Model_Wine>
	 * @lazy
	 * @cascade remove
	 */
	protected $wine;

	/**
	 * The list of usages
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_WineTreatment_Domain_Model_Usage>
	 * @lazy
	 * @cascade remove
	 */
	protected $usages;

	/**
	 * The list of functions
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_WineTreatment_Domain_Model_Function>
	 * @lazy
	 * @cascade remove
	 */
	protected $functions;

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
	 * The TI PDF
	 *
	 * @var string
	 */
	protected $tiPdf = '';

	/**
	 * The TI version
	 *
	 * @var float
	 */
	protected $tiVersion = 0.00;

	/**
	 * Constructs this product
	 */
	public function __construct() {
		$this->specialInformation = new Tx_Extbase_Persistence_ObjectStorage();
		$this->wine = new Tx_Extbase_Persistence_ObjectStorage();
		$this->usages = new Tx_Extbase_Persistence_ObjectStorage();
		$this->functions = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Sets the TI PDF
	 *
	 * @param string $tiPdf
	 * @return void
	 */
	public function setTiPdf($tiPdf) {
		$this->tiPdf = $tiPdf;
	}

	/**
	 * Gets the TI PDF
	 *
	 * @return string
	 */
	public function getTiPdf() {
		return $this->tiPdf;
	}

	/**
	 * Sets the TI Version
	 *
	 * @param float $tiVersion
	 * @return void
	 */
	public function setTiVersion($tiVersion) {
		$this->tiVersion = $tiVersion;
	}

	/**
	 * Gets the TI Version
	 *
	 * @return float
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
	 * Sets the GVO Bio PDF
	 *
	 * @param string $bio
	 * @return void
	 */
	public function setBio($bio) {
		$this->bio = $bio;
	}

	/**
	 * Gets the GVO Bio PDF
	 *
	 * @return string
	 */
	public function getBio() {
		return $this->bio;
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
	 * @param float $algVersion
	 * @return void
	 */
	public function setAlgVersion($algVersion) {
		$this->algVersion = $algVersion;
	}

	/**
	 * Gets the ALG Version
	 *
	 * @return float
	 */
	public function getAlgVersion() {
		return $this->algVersion;
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
		$this->specialInformation->attach($specInfo);
	}

	/**
	 * Removes a SpecInfo from this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_SpecInfo $specInfoToRemove
	 * @return void
	 */
	public function removeSpecialInformation(Tx_WineTreatment_Domain_Model_SpecInfo $specInfoToRemove) {
		$this->specialInformation->detach($specInfoToRemove);
	}

	/**
	 * Removes all SpecInfo from this product
	 *
	 * @return void
	 */
	public function removeAllSpecialInformation() {
		$this->specialInformation = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns all SpecInfo in this product
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getSpecialInformation() {
		return clone $this->specialInformation;
	}

	/**
	 * Adds a Wine to this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Wine $wine
	 * @return void
	 */
	public function addWine(Tx_WineTreatment_Domain_Model_Wine $wine) {
		$this->wine->attach($wine);
	}

	/**
	 * Removes a Wine from this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Wine $wineToRemove
	 * @return void
	 */
	public function removeWine(Tx_WineTreatment_Domain_Model_Wine $wineToRemove) {
		$this->wine->detach($wine);
	}

	/**
	 * Removes all Wine from this product
	 *
	 * @return void
	 */
	public function removeAllWine() {
		$this->wine = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns all Wine in this product
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getWine() {
		return clone $this->wine;
	}

	/**
	 * Adds a Usage to this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Usage $usage
	 * @return void
	 */
	public function addUsages(Tx_WineTreatment_Domain_Model_Usage $usage) {
		$this->usages->attach($usage);
	}

	/**
	 * Removes a Usage from this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Usage $usageToRemove
	 * @return void
	 */
	public function removeUsages(Tx_WineTreatment_Domain_Model_Usage $usageToRemove) {
		$this->usages->detach($usageToRemove);
	}

	/**
	 * Removes all Usage from this product
	 *
	 * @return void
	 */
	public function removeAllUsages() {
		$this->usages = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns all Usage in this product
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getUsages() {
		return clone $this->usages;
	}

	/**
	 * Adds a Function to this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Function $function
	 * @return void
	 */
	public function addFuntions(Tx_WineTreatment_Domain_Model_Functions $function) {
		$this->functions->attach($function);
	}

	/**
	 * Removes a Function from this product
	 *
	 * @param Tx_WineTreatment_Domain_Model_Function $functionToRemove
	 * @return void
	 */
	public function removeFunctions(Tx_WineTreatment_Domain_Model_Function $functionToRemove) {
		$this->functions->detach($functionToRemove);
	}

	/**
	 * Removes all Function from this product
	 *
	 * @return void
	 */
	public function removeAllFunctions() {
		$this->functions = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns all Function in this product
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getFunctions() {
		return clone $this->functions;
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

