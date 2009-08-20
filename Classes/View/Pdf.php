<?php

abstract class Tx_WineTreatment_View_Pdf extends Tx_Extbase_MVC_View_AbstractView {

	/**
	 * @var FPDF
	 */
	protected $pdf;

	/**
	 * Initialize PDF-document
	 *
	 * @return void
	 */
	protected function initializePdf() {
		$this->pdf->SetCreator('FPDF');
		$this->pdf->SetAuthor('ZEFUEG GdbR');
		$this->pdf->setHeaderData('briefkopf.jpg', 170);
		$this->pdf->AddPage();
	}

	/**
	 * Starts a column PDF-document
	 *
	 * @return void
	 */
	protected function startColumnPdf() {
		$this->pdf = new Tx_WineTreatment_Page_TwoColumnPdf();
		$this->initializePdf();
	}

	/**
	 * Starts a standard PDF-document
	 *
	 * @return void
	 */
	protected function startStandardPdf() {
		$this->pdf = new Tx_WineTreatment_Page_StandardPdf();
		$this->initializePdf();
	}

	/**
	 * Outputs a PDF-document
	 *
	 * @param string $title
	 * @return void
	 */
	protected function outputPdf($title='example.pdf') {
		$this->pdf->SetProtection(
			array(
				'print',
			)
		);
		$this->pdf->setViewerPreferences(
			array(
				'DisplayDocTitle' => true,
			)
		);
		$this->pdf->Output($title, 'D');
		unset($this->pdf);
	}

	/**
	 * Modifies HTML-content
	 *
	 * @param string $html
	 * @return string
	 */
	protected function htmlContent($html) {
		return str_replace('<ul>', '<ul type="square">', $html);
	}

}

