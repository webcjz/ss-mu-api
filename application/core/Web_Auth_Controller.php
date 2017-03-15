<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 14:41
 */

Class Web_Auth_Controller extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        if(empty($this->session->iflogin))
        {
        	$base_url = $this->config->item('base_url');
            header("Location: {$base_url}web/login");
        }
    }

}