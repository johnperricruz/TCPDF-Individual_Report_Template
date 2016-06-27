<?php	
	/*
	* TCPDF LIB Location
	*/
	//require_once('../includes/tcpdf/tcpdf.php');
	
	class individual_report extends TCPDF{

	    public function pdf_settings(){
			// set document information
			$this->SetCreator(PDF_CREATOR);
			$this->SetAuthor('John Perri Cruz');
			$this->SetTitle('OptimizeX Application Management Module');
			$this->SetSubject('Application Report');

			// remove default header/footer
			$this->setPrintHeader(false);
			$this->setPrintFooter(false);

			// set default monospaced font
			$this->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

			// set margins
			$this->SetMargins(10, 10, 10,10);

			// set auto page breaks
			$this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		}	
		public function content(){
			$return = 'Hello World!';
			return $return;
		}			
		public function generate(){
			$this->pdf_settings();
			
			// Add a page
			$this->AddPage();

			//Content
			$html = $this->content();

			//Write
			$this->writeHTML($html);

			// ---------------------------------------------------------

			// Close and output PDF document
			// This method has several options, check the source code documentation for more information.
			$this->Output('example_001.pdf', 'I');
		}
	}
	
	/*
	* Instantiate
	*/
	$individual_report = new individual_report();
	
	
	/*
	* Execute
	*/
	$individual_report->generate();
