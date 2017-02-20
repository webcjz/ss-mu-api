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

   public function updateRowsUser($id_arr)
    {


        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id',$id);
        $query=$this->db->get();

        return $query->num_rows() == 0 ? null : $query->row_array();
    }

    public function addRowUser($arr)
    {

        $this->db->insert('user', $arr);

        return $this->db->affected_rows();
    }

    public function delRowUser($id)
    {
        $this->db->where('id',$id);

        $this->db->delete('user');


        return $this->db->affected_rows();


    }

    public function updateRowUser($id,$arr)
    {
        $this->db->where('id',$id);


        $this->db->update('user', $arr);

        return $this->db->affected_rows();


    }







//test 并发
    public function getNum($uid)
    {
        $this->db->where('uid',$uid);
        $this->db->from('test');
        $query=$this->db->get()->row();
        return $query;
    }
    public function updateNum()
    {

        $this->db->set('num','num -1',false);
        $this->db->update('test');
    }
}



