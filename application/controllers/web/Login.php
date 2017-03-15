<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/27
 * Time: 14:21
 */
class Login extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }


    public function index()
    {
        empty($_POST['token'])?$token=null:$token=$_POST['token'];

        $this->load->model('Auth_Model');
        $row = $this->Auth_Model->checkToken($token);
        if (!empty($row)||$this->session->iflogin==1) {
            $this->session->iflogin=1;
            $base_url = $this->config->item('base_url');
            header("Location: {$base_url}web/admin");
        }

        $this->load->view('web/login');
    }

    public function logout()
    {
		$this->session->sess_destroy();
        $base_url = $this->config->item('base_url');
        header("Location: {$base_url}web/login");
    }
}
