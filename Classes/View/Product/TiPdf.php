<?php

class Tx_WineTreatment_View_Product_TiPdf extends Tx_WineTreatment_View_Pdf {

	protected $product;

	public function initializeView() {
		$temp = $this->controllerContext->getArguments();
		$this->product = $temp['product']->getValue();
	}

	public function render() {
		$this->startPdf();
		$this->pdf->SetTitle($this->product->getName());
		$this->pdf->SetSubject('Technische Information für ' . $this->product->getName());
//		$htmlcontent = '<h1>' . $this->product->getName() . '</h1>';
//		$this->pdf->writeHTML($htmlcontent, true, 0, true, 0);
		$content = '<h2>Produkt</h2>';
		$content .= $this->product->getDescription();
		$content .= '<h2>Anwendung</h2>';
		$content .= $this->product->getTiUsage();
		$content .= '<h2>Dosierung</h2>';
		$content .= $this->product->getTiDosage();
		$content .= '<h2>Eigenschaften</h2>';
		$content .= $this->product->getTiProperty();
		$content .= '<h2>Besonderheiten</h2>';
		$content .= $this->product->getTiSpecial();
		$content .= '<h2>Lagerung</h2>';
		$content .= $this->product->getTiStorage();
		$content .= '<h2>Qualit&auml;t</h2>';
		$content .= $this->product->getTiQuality();
		$this->pdf->PrintChapter($this->product->getName(), $content);
		$this->outputPdf($this->product->getName() . '.pdf');
	}

	protected function getControllerContext() {
		return $this->controllerContext;
	}

}

