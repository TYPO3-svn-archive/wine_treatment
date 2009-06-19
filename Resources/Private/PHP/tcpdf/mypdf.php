<?php

class MYPDF extends TCPDF {
	
	//number of colums
	protected $ncols = 2;
	
	// columns width
	protected $colwidth = 80;
	
	//Current column
	protected $col = 0;
	
	//Ordinate of column start
	protected $y0;
		
	//Set position at a given column
	public function SetCol($col) {
		$this->col = $col;
		// space between columns
		if ($this->ncols > 1) {
			$column_space = round((float)($this->w - $this->original_lMargin - $this->original_rMargin - ($this->ncols * $this->colwidth)) / ($this->ncols - 1));
		} else {
			$column_space = 0;
		}
		// X position of the current column
		if ($this->rtl) {
			$x = $this->w - $this->original_rMargin - ($col * ($this->colwidth + $column_space));
			$this->SetRightMargin($this->w - $x);
			$this->SetLeftMargin($x - $this->colwidth);
		} else {
			$x = $this->original_lMargin + ($col * ($this->colwidth + $column_space));
			$this->SetLeftMargin($x);
			$this->SetRightMargin($this->w - $x - $this->colwidth);
		}
		$this->x = $x;
		//$this->x = $x + $this->cMargin; // use this for html mode
		if ($col > 0) {
			$this->y = $this->y0;
		}
	}
	
	//Method accepting or not automatic page break
	public function AcceptPageBreak() {
		if($this->col < ($this->ncols - 1)) {
			//Go to next column
			$this->SetCol($this->col + 1);
			//Keep on page
			return false;
		} else {
			$this->AddPage();
			//Go back to first column
			$this->SetCol(0);
			//Page break
			return false;
		}
	}
	
	// Set chapter title
	public function ChapterTitle($label) {
		$this->SetFont('helvetica', '', 14);
		$this->SetFillColor(200, 220, 255);
		$this->Cell(0, 6, $label, 0, 1, '', 1);
		$this->Ln(4);
		// Save ordinate
		$this->y0 = $this->GetY();
	}
	
	// Print chapter body
	public function ChapterBody($text) {
		// store current margin values
		$lMargin = $this->lMargin;
		$rMargin = $this->rMargin;
		// get esternal file content
//		$txt = file_get_contents($file, false);
		$txt = $text;
		// Font
		$this->SetFont('times', '', 9);
		// Output text in a column
		$this->MultiCell($this->colwidth, 5, $txt, 0, 'J', 0, 1, '', '', true, 0, html);
		$this->Ln();
		// Go back to first column
		$this->SetCol(0);
		// restore previous margin values
		$this->SetLeftMargin($lMargin);
		$this->SetRightMargin($rMargin);
	}
	
	//Add chapter
//	public function PrintChapter($num,$title,$file) {
	public function PrintChapter($title, $text) {
		$this->AddPage();
		$this->ChapterTitle($title);
		$this->ChapterBody($text);
	}
}
