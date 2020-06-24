<?php

class Biodata extends CI_Controller{

	function __construct()
	{
		parent::__construct();
	}

	function index(){
		
		$this->load->view('vw_form.php');
	}

	function save(){
	 $this->load->view('vw_biodata.php');
	}
}


?>