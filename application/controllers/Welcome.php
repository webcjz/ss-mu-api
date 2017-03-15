<?php

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
   		$base_url = $this->config->item('base_url');
    	header("Location: {$base_url}web/login"); 
 }

}
