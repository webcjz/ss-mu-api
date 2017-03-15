<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/27
 * Time: 15:08
 */
class Admin extends Web_Auth_Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('web/admin_index.php');
        
    }



}