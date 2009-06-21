<?php

class Tx_WineTreatment_Page_TwoColumnPdf extends Tx_WineTreatment_Page_StandardPdf {

	protected $ncols = 2;

	protected $colwidth = 80;

	protected $col = 0;

	protected $y0;

	public function __construct() {
		parent::__construct();
	}

	public function SetCol($col) {
		$this->col = $col;

		if ($this->ncols > 1) {
			$column_space = round((float)($this->w - $this->original_lMargin - $this->original_rMargin - ($this->ncols * $this->colwidth)) / ($this->ncols - 1));
		} else {
			$column_space = 0;
		}

		$x = $this->original_lMargin + ($col * ($this->colwidth + $column_space));
		$this->SetLeftMargin($x);
		$this->SetRightMargin($this->w - $x - $this->colwidth);
		$this->x = $x;

		if ($col > 0) {
			$this->y = $this->y0;
		}

	}

	public function AcceptPageBreak() {

		if ($this->col < ($this->ncols - 1)) {
			$this->SetCol($this->col + 1);
			return false;
		} else {
			$this->AddPage();
			$this->SetCol(0);
			return false;
		}

	}

	public function writeColumns($text) {
		$this->y0 = $this->GetY();
		$lMargin = $this->lMargin;
		$rMargin = $this->rMargin;
		$this->SetFont('arialunicid0', '', 9);
		$this->MultiCell($this->colwidth, 5, $text, 0, 'J', 0, 1, $this->GetX(), $this->GetY(), true, 0, true);
		$this->Ln();
		$this->SetCol(0);
		$this->SetLeftMargin($lMargin);
		$this->SetRightMargin($rMargin);
	}

}

