<?php
class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model');
    }


    public function test()
    {
        $uid=100;

        $fp = fopen("lock.txt", "w+");
        if(flock($fp,LOCK_EX))
        {
            //获取剩余数量，如果不为零继续减
            if($num=$this->User_Model->getNum($uid)->num) {
                echo '剩余:'.$num=$this->User_Model->getNum($uid)->num;
                $num = $this->User_Model->upDateNum();
            }
            else{
                echo '剩余数量为0';
            }

            flock($fp,LOCK_UN);
        }
        fclose($fp);

    }


    public function testzz(){

        $a=12;
        $b=21;
        $c=11;


        $a,$b,$c;

        $d=$a>$b? $a:$b;

        







    }












}


