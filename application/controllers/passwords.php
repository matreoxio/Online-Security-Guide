<?php

class Passwords extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {	
		$this->load->helper('url');
        $this->load->view("header", array("title" => "SecurityAware",
						     "page_script" => "",
						     "page_stylesheet" => "", 
						     "logo" => ""));
							 
		$this->load->view("pass.php");

        $this->load->view("footer.php");
   }
}