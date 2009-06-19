<?php

abstract class Tx_WineTreatment_View_Pdf extends Tx_Extbase_MVC_View_AbstractView {

	/**
	 * @var TCPDF
	 */
	protected $pdf;

	/**
	 * Initialize PDF-document
	 *
	 * @return void
	 */
	protected function startInitializePdf() {
		require_once(t3lib_extMgm::extPath('wine_treatment') . 'Resources/Private/PHP/tcpdf/tcpdf.php');
	}

	/**
	 * Initialize PDF-document
	 *
	 * @return void
	 */
	protected function endInitializePdf() {
		define('K_PATH_IMAGES', t3lib_extMgm::extPath('wine_treatment') . 'Resources/Public/Images/');
		$this->pdf->SetCreator(PDF_CREATOR);
		$this->pdf->SetAuthor('ZEFUEG GdbR');
		$this->pdf->setHeaderData('briefkopf.jpg', 180);
		$this->pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$this->pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		$this->pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$this->pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$this->pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		$this->pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		$this->pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		$this->pdf->setFont('dejavusans', '', 10);
	}

	/**
	 * Starts a column PDF-document
	 *
	 * @return void
	 */
	protected function startColumnPdf() {
		$this->startInitializePdf();
		require_once(t3lib_extMgm::extPath('wine_treatment') . 'Resources/Private/PHP/tcpdf/twocolumnspdf.php');
		$this->pdf = new TWOCOLUMNSPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$this->endInitializePdf();
	}

	/**
	 * Starts a standard PDF-document
	 *
	 * @return void
	 */
	protected function startStandardPdf() {
		$this->startInitializePdf();
		$this->pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$this->endInitializePdf();
		$this->pdf->AddPage();
	}

	/**
	 * Outputs a PDF-document
	 *
	 * @param string $title
	 * @return void
	 */
	protected function outputPdf($title='example.pdf') {
		$this->pdf->lastPage();
		$this->pdf->SetProtection(
			array(
				'print',
			)
		);
		$this->pdf->Output($title, 'D');
		unset($this->pdf);
	}

}

