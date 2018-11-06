<?php

class TestGeneralKnowledgeScenario extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {	$this->load->helper('url');
        $this->load->view("header", array("title" => "SecurityAware"));
						

		$this->load->view("generalKnowledgeTestScenario");
				
		$this->load->view("footer.php");
   }
}
