<?php

class Tx_WineTreatment_View_Product_AlgPdf extends Tx_WineTreatment_View_Pdf {

	protected $product;

	public function initializeView() {
		$temp = $this->controllerContext->getArguments();
		$this->product = $temp['product']->getValue();
	}

	public function render() {
		$this->startStandardPdf();
		$this->pdf->SetTitle($this->product->getName());
		$this->pdf->SetSubject('Information zum Allergenstatus für ' . $this->product->getName());
		$htmlcontent = '<h1 style="text-align: center;">INFORMATION ZUM ALLERGENSTATUS</h1>';
		$htmlcontent .= '<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>';
		$htmlcontent .= '<h2 style="text-decoration: underline;">Produkt: ' . $this->product->getName() . '</h2>';
		$htmlcontent .= '<p>&nbsp;</p><p>&nbsp;</p>';

		if ($this->product->getAlgDirective() == 0) {
		} else {

			if ($this->product->getAlgDirective() == 1) {
				$htmlcontent .= '<strong>Keine Allergene nach der Directive 2003/89/EC.</strong><br />';
			} else {
				$htmlcontent .= '<strong>Enthaltene Allergene nach der Direktive 2003/89/EC:</strong><br />';
				$htmlcontent .= $GLOBALS['TSFE']->cObj->parseFunc($this->product->getAlgDirectiveText(), array(), '< lib.parseFunc_RTE');
			}

		}

		$htmlcontent .= '<p>&nbsp;</p><p>&nbsp;</p>';

		if ($this->product->getAlgAlba() == 0) {
		} else {

			if ($this->product->getAlgAlba() == 1) {
				$htmlcontent .= '<strong>Keine Allergene nach der ALBA-Liste.</strong><br />';
			} else {
				$htmlcontent .= '<strong>Enthaltene Allergene nach der ALBA-Liste:</strong><br />';
				$htmlcontent .= $GLOBALS['TSFE']->cObj->parseFunc($this->product->getAlgAlbaText(), array(), '< lib.parseFunc_RTE');
			}

		}

		$htmlcontent .= '<p>&nbsp;</p><p>&nbsp;</p>';
		$htmlcontent .= '<p>Datum: ' . $this->product->getTstamp()->format('d.m.Y') . '</p>';
		$htmlcontent .= '<p>&nbsp;</p>';
		$htmlcontent .= '<p>Mit freundlichen Gr&uuml;ßen<br />Dipl. Ing. (FH) Christian Kost</p>';
		$this->pdf->writeHTML($htmlcontent, true, 0, true, 0);
		$this->outputPdf($this->product->getName() . '-ALG.pdf');
	}

	protected function getControllerContext() {
		return $this->controllerContext;
	}

}

