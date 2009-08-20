<?php

class Tx_WineTreatment_View_Product_TiPdf extends Tx_WineTreatment_View_Pdf {

	protected $product;

	public function initializeView() {
		$temp = $this->controllerContext->getArguments();
		$this->product = $temp['product']->getValue();
	}

	public function render() {
		$this->startColumnPdf();
		$this->pdf->SetTitle($this->product->getName());
		$this->pdf->SetSubject('Technische Information für ' . $this->product->getName());
		$this->pdf->writeHeadline('Technische Information: ' . $this->product->getName());
		$content = $this->htmlContent($GLOBALS['TSFE']->cObj->parseFunc($this->product->getDescription(), array(), '< lib.parseFunc_RTE'));
		$content .= '<br />';
		$content .= '<h2>Anwendung</h2>';
		$content .= $this->htmlContent($GLOBALS['TSFE']->cObj->parseFunc($this->product->getTiUsage(), array(), '< lib.parseFunc_RTE'));
		$content .= '<br />';
		$content .= '<h2>Dosierung</h2>';
		$content .= $this->htmlContent($GLOBALS['TSFE']->cObj->parseFunc($this->product->getTiDosage(), array(), '< lib.parseFunc_RTE'));
		$content .= '<br />';
		$content .= '<h2>Eigenschaften</h2>';
		$content .= $this->htmlContent($GLOBALS['TSFE']->cObj->parseFunc($this->product->getTiProperty(), array(), '< lib.parseFunc_RTE'));
		$content .= '<br />';

		if (strlen($this->product->getTiSpecial()) > 0) {
			$content .= '<h2>Besonderheiten</h2>';
			$content .= $this->htmlContent($GLOBALS['TSFE']->cObj->parseFunc($this->product->getTiSpecial(), array(), '< lib.parseFunc_RTE'));
			$content .= '<br />';
		}

		$content .= '<h2>Lagerung</h2>';
		$content .= $this->htmlContent($GLOBALS['TSFE']->cObj->parseFunc($this->product->getTiStorage(), array(), '< lib.parseFunc_RTE'));
		$content .= '<br />';
		$content .= '<h2>Qualit&auml;t</h2>';
		$content .= $this->htmlContent($GLOBALS['TSFE']->cObj->parseFunc($this->product->getTiQuality(), array(), '< lib.parseFunc_RTE'));
		$content .= '<br />';
		$this->pdf->writeColumns($content);
		$this->pdf->setFooterText('Copyright &copy; 2009 by ZEF&Uuml;G GdbR. Alle Rechte vorbehalten.<br /><br />Version: ' . number_format((float)$this->product->getTiVersion(), 1) . '&nbsp;&nbsp;' . $this->product->getTstamp()->format('d.m.Y'));
		$this->outputPdf($this->product->getName() . '-TI.pdf');
	}

	protected function getControllerContext() {
		return $this->controllerContext;
	}

}

