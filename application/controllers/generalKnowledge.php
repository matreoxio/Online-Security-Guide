<?php

class GeneralKnowledge extends CI_Controller
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
                
        $this->load->view("generalKnowledgeInfo");
                
        $this->load->view("footer");
    }
}
