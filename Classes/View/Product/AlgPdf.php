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
		$this->pdf->writeHeadline('Information zum Allergenstatus: ' . $this->product->getName());
		$htmlcontent = '<p>&nbsp;</p><p>&nbsp;</p>';

		if ($this->product->getAlgDirective() == 0) {
		} else {
			$htmlcontent .= '<strong>Enthaltene Allergene nach der Direktive 2003/89/EC:</strong><br />';

			if ($this->product->getAlgDirective() == 1) {
				$htmlcontent .= '<br />Keine<br />';
			} else {
				$htmlcontent .= $GLOBALS['TSFE']->cObj->parseFunc($this->product->getAlgDirectiveText(), array(), '< lib.parseFunc_RTE');
			}

		}

		$htmlcontent .= '<p>&nbsp;</p><p>&nbsp;</p>';

		if ($this->product->getAlgAlba() == 0) {
		} else {
			$htmlcontent .= '<strong>Enthaltene Allergene nach der ALBA-Liste:</strong><br />';

			if ($this->product->getAlgAlba() == 1) {
				$htmlcontent .= '<br />Keine<br />';
			} else {
				$htmlcontent .= $GLOBALS['TSFE']->cObj->parseFunc($this->product->getAlgAlbaText(), array(), '< lib.parseFunc_RTE');
			}

		}

		$this->pdf->writeHTML($htmlcontent, true, 0, true, 0);
		$this->pdf->setFooterText('Copyright &copy; 2009 by ZEF&Uuml;G GdbR. Alle Rechte vorbehalten.<br /><br />Version: ' . (string)$this->product->getAlgVersion() . '&nbsp;&nbsp;' . $this->product->getTstamp()->format('d.m.Y'));
		$this->outputPdf($this->product->getName() . '-ALG.pdf');
	}

	protected function getControllerContext() {
		return $this->controllerContext;
	}

}

