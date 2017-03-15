<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/17
 * Time: 10:58
 */

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }




}

/*// 后台管理公用控制器
include APPPATH . 'core/Admin_Controller.php';

// 服务器之间交互公用控制器
include APPPATH . 'core/Service_Controller.php';


// app公用控制器
include APPPATH . 'core/App_Controller.php';
//web 公用控制器
include APPPATH . 'core/Web_Controller.php';*/

include APPPATH . 'core/Api_Auth_Controller.php';

include APPPATH . 'core/Web_Auth_Controller.php';


