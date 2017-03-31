<?php

class Account extends CI_Controller{
	
	public function index()
    {
	//	$this->load->view('templates/headerAssets');
        $this->load->view('login');
	//	$this->load->view('templates/footerAssets');
    }
	
	
	public function signup(){
		
		$this->load->view('signup');
	}

}

?>








