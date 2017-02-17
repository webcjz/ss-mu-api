<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 13:30
 */
class User_Model extends CI_Model
{



    public function __construct()
    {
        parent::__construct();
        $this->load->database();//连接数据库
    }

    public  function getRowsUser()
    {

        $this->db->select('*');
        $this->db->from('user');
        $query=$this->db->get();

        return $query->num_rows() == 0 ? null : $query->result_array();

    }

    public function getRowUser($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id',$id);
        $query=$this->db->get();

        return $query->num_rows() == 0 ? null : $query->row_array();
    }

  /*  public function getRowUser($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id',$id);
        $query=$this->db->get();

        return $query->num_rows() == 0 ? null : $query->row_array();
    }*/




}



