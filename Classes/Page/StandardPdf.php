<?php

require_once (t3lib_extMgm::extPath('wine_treatment') . 'Resources/Private/PHP/tcpdf/tcpdf.php');
define ('K_PATH_IMAGES', t3lib_extMgm::extPath('wine_treatment') . 'Resources/Public/Images/');

class Tx_WineTreatment_Page_StandardPdf extends TCPDF {

	protected $footerText;

	public function __construct() {
		parent::__construct();
		$this->SetHeaderFont(array('arialunicid0', '', 10));
		$this->SetFooterFont(array('arialunicid0', '', 10));
		$this->SetDefaultMonospacedFont('courier');
		$this->SetMargins(20, 20, 20);
		$this->SetHeaderMargin(20);
		$this->SetFooterMargin(30);
		$this->SetAutoPageBreak(TRUE, 40);
		$this->setImageScale(1);
		$this->setFont('arialunicid0', '', 10);
	}

	public function setFooterText($text) {
		$this->footerText = $text;
	}

	public function writeHeadline($text) {
		$this->SetY(50);
		$this->writeHTML('<h1>' . $text . '</h1>', true, 0, false, true, 'C');
		$this->SetY(60);
		$this->specialLine();
		$this->SetY(70);
	}

	public function Header() {
		$ormargins = $this->getOriginalMargins();
		$headerfont = $this->getHeaderFont();
		$headerdata = $this->getHeaderData();

		if (($headerdata['logo']) AND ($headerdata['logo'] != K_BLANK_IMAGE)) {
			$this->Image(K_PATH_IMAGES . $headerdata['logo'], $this->GetX(), $this->getHeaderMargin(), $headerdata['logo_width']);
			$imgy = $this->getImageRBY();
		} else {
			$imgy = $this->GetY();
		}

		$cell_height = round(($this->getCellHeightRatio() * $headerfont[2]) / $this->getScaleFactor(), 2);

		$header_x = $ormargins['left'] * ($headerdata['logo_width'] * 1.1);

		$this->SetTextColor(0, 0, 0);
		$this->SetFont($headerfont[0], $headerfont[1], $headerfont[2]);
		$this->SetX($header_x);
		$this->MultiCell(0, $cell_height + 20, $headerdata['string'], 0, '', 0, 1, '', '', true, 0, false);
		$this->SetY((8 / $this->getScaleFactor()) + max($imgy, $this->GetY()));
		$this->specialLine();
	}

	public function specialLine() {
		$ormargins = $this->getOriginalMargins();
		$this->SetLineStyle(
			array(
				'width' => 8 / $this->getScaleFactor(),
				'cap' => 'butt',
				'join' => 'miter',
				'dash' => 0,
				'color' => array(227, 228, 229)
			)
		);
		$this->SetX($ormargins['left']);
		$this->Cell(0, 0, '', 'T', 1, 'C');
	}

	public function Footer() {
		$cur_y = $this->GetY();
		$this->SetTextColor(0, 0, 0);
		$this->SetY($cur_y);
		$this->specialLine();
		$this->MultiCell(0, 0, $this->footerText, 0, 'C', 0, 1, $this->GetX(), $this->GetY(), true, 0, true);
	}

}

