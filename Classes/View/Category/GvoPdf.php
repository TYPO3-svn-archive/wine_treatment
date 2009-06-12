<?php

class Tx_WineTreatment_View_Category_GvoPdf extends Tx_WineTreatment_View_Pdf {

	protected $product;

	public function initializeView() {
		$temp = $this->controllerContext->getArguments();
		$this->category = $temp['category']->getValue();
	}

	public function render() {
		$this->startStandardPdf();
		$this->pdf->SetTitle($this->category->getName());
		$this->pdf->SetSubject('Allergen-Informationen für ' . $this->category->getName());
		$htmlcontent = '<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>';
		$htmlcontent .= '<p>Sehr geehrte Damen und Herren,</p>';
		$htmlcontent .= '<p>&nbsp;</p>';
		$htmlcontent .= '<p>für die folgenden Produkte können wir bestätigen, dass sie keine gentechnisch veränderten Roh-, Inhaltsstoffe und Organismen gemäß VO (EG) Nr. 1829/2003 und VO (EG) Nr. 1830/2003 enthalten:</p>';
		$htmlcontent .= '<p>&nbsp;</p>';
		$htmlcontent .= '<ul>';

		foreach ($this->category->getProducts() as $product) {

			if ($product->getGvo()) {
				$htmlcontent .= '<li>' . $product->getName() . '</li>';
			}

		}

		$htmlcontent .= '</ul>';
		$htmlcontent .= '<p>&nbsp;</p>';
		$htmlcontent .= '<p>Eine Kennzeichnung gemäß der oben genannten Verordnungen besteht daher nicht. Diese Bescheinigung ist bis zum ' . $this->category->getGvoValid()->format('d.m.Y') . ' gültig. Wir überprüfen den GVO-Sstatus unsere Produkte regelmäßig.</p>';
		$htmlcontent .= '<p>&nbsp;</p>';
		$htmlcontent .= '<p>Mit freundlichen Grüßen<br />Dipl. Ing. (FH) Christian Kost</p>';

		$this->pdf->writeHTML($htmlcontent, true, 0, true, 0);
		$this->outputPdf($this->category->getName() . '.pdf');
	}

	protected function getControllerContext() {
		return $this->controllerContext;
	}

}

