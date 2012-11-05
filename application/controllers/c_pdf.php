<?php
class C_Pdf extends MY_Controller {

	public function index() {
		$this -> load -> library('mpdf');
		$this -> mpdf -> WriteHTML('<p>Hallo World</p>');
		$this -> mpdf -> Output();
	}

	public function child_health_assessment() {
		$stylesheet = file_get_contents(base_url().'css/styles.css');
		//$html= $this->load->view('form_child_health');
		$this -> load -> library('mpdf');
		
		$this -> mpdf -> WriteHTML($stylesheet,1);
		$this -> mpdf -> WriteHTML('
			<h3 align="center"> CHILD HEALTH COMMODITIES ASSESSMENT</h3>

	<h3 align="center"> Commodities Assessment </h3>
	<p style="text-align: center;color:#872300">
		Indicate the quantities of the Zinc,ORS,Ciprofloxacin &amp; Metronidazole (Flagyl) available in this facility at the following units

	</p>
		
		',2);
		$this -> mpdf -> Output();

	}

	public function maternal_health_assessment() {
		$this -> load -> library('mpdf');
		$this -> mpdf -> WriteHTML('<p>Hallo World</p>');
		$this -> mpdf -> Output();

	}

}
