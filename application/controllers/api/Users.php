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
            parent::__construct(empty($_GET["token"])?null:$_GET["token"]);
            $this->load->model('User_Model');

        }

        public function getUsers()
        {


        $row = $this->User_Model->getRowsUser();
        if (!empty($row)) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($row));
        }
        }

        public function getUser($id)
        {

            $row = $this->User_Model->getRowUser($id);
            if (!empty($row)) {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($row));
            }
        }

        //用于更新一些用户
        /*public function postUsers($id_arr)
        {
            $row=load->model('User_Model');


        }*/


        public function addUser()
        {

             $this->postUser();

       }

        public function delUser($id)
        {

            echo $this->User_Model->delRowUser($id);



        }



        public function postUser()
        {

/*            $arr=array(
                'passwd'=>$passwd,
                't'=>$t,
                'u'=>$u,
                'd'=>$d,
                'transfer_enable'=>$transfer_enable,
                'port'=>$port,
                'switch'=>$switch,
                'enable'=>$enable,
                'method'=>$method
            );*/

            //把零散的数据合成一个数组提交上去，而且判断每项是否为空

            isset($_POST['passwd'])?$arr['passwd']=$_POST['passwd']:'';

            isset($_POST['t'])?$arr['t']=$_POST['t']:'';

            isset($_POST['u'])?$arr['u']=$_POST['u']:'';

            isset($_POST['d'])?$arr['d']=$_POST['d']:'';

            isset($_POST['transfer_enable'])?$arr['transfer_enable']=$_POST['transfer_enable']:'';

            isset($_POST['port'])?$arr['port']=$_POST['port']:'';

            isset($_POST['switch'])?$arr['switch']=$_POST['switch']:'';

            isset($_POST['enable'])?$arr['enable']=$_POST['enable']:'';

            isset($_POST['method'])?$arr['method']=$_POST['method']:'';

            if(isset($_POST['id'])) {

                echo $this->User_Model->updateRowUser($_POST['id'], $arr);
            }
            else{
                echo 'Post Fail';
            }


        }


}