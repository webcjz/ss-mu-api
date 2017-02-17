<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 14:05
 */

Class Auth_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function checkToken($token)
    {
        $this->db->select('token');
        $this->db->from('auth');
        $this->db->where('token',$token);
        $query=$this->db->get();

        return $query->num_rows() == 0 ? null : $query->row_array();


    }






}