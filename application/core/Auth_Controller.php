<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 14:41
 */

Class Auth_Controller extends MY_Controller
{


    public function __construct($token = null)
    {
        parent::__construct();

        $this->load->model('Auth_Model');
        $row = $this->Auth_Model->checkToken($token);
        if (empty($row)) {
            echo 'Token Fail';
            exit;

        }

    }

}
