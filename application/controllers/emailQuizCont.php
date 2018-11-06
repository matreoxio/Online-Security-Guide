<?php

class EmailQuizCont extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
		$this->load->helper('url');
        $this->load->view("header", array("title" => "SecurityAware",
            "page_script" => "ColJScript.js",
            "page_stylesheet" => "ColStyle.css",
            "logo" => ""));
                
        $this->load->view("emailQuiz");
                
        $this->load->view("footer");
    }
}
