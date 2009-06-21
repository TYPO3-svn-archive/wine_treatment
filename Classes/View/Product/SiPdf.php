<?php

class Tx_WineTreatment_View_Product_SiPdf extends Tx_WineTreatment_View_Pdf {

	protected $product;

	public function initializeView() {
		$temp = $this->controllerContext->getArguments();
		$this->product = $temp['product']->getValue();
	}

	public function render() {
		$this->startStandardPdf();
		$this->pdf->SetTitle($this->product->getName());
		$this->pdf->SetSubject('Spezial Informationen für ' . $this->product->getName());
		$this->pdf->writeHeadline('Spezial Informationen: ' . $this->product->getName());
		$this->pdf->SetDrawColor(0, 0, 0);
		$this->pdf->SetLineWidth(0.1);
		$date = '01.01.1970';

		$content = '
<table border="1" cellpadding="5">
	<tr bgcolor="#e3e4e5">
		<th align="center" width="70"><b>Datum</b></th>
		<th align="center" width="410"><b>Information</b></th>
	</tr>
';

		foreach ($this->product->getSpecialInformation() as $specInfo) {
			$date = $specInfo->getTstamp()->format('d.m.Y');
			$content .= '<tr><td width="70">';
			$content .= $date;
			$content .= '</td><td width="410">';
			$content .= $specInfo->getInformation();
			$content .= '</td></tr>';
		}

		$content .= '</table>';
		$this->pdf->writeHTML($content, true, 0, true, 0);


		$this->pdf->setFooterText('Copyright &copy; 2009 by ZEF&Uuml;G GdbR. Alle Rechte vorbehalten.<br /><br />' . $date);
		$this->outputPdf($this->product->getName() . '-SI.pdf');
	}

	protected function getControllerContext() {
		return $this->controllerContext;
	}

}

