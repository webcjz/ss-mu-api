<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 13:25
 */
class Users extends Auth_Controller
{

    public function __construct()
    {
        //往auth_controller里面传Token

        parent::__construct($_GET["token"]);
    }


    public function getUsers()
    {
        $this->load->model('User_Model');

        $row = $this->User_Model->getRowsUser();
        if (!empty($row)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($row));
        }

    }
        public function getUser($id)
    {
        $this->load->model('User_Model');
        $row=$this->User_Model->getRowUser($id);
        if (!empty($row)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($row));
        }

    }



}