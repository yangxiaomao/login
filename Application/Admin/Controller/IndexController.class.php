<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
		// 获取当前用户ID
        define('UID',is_login());
        if( !UID ){// 还没登录 跳转到登录页面
            $this->redirect('Login/index');
        }
	}
    public function index(){
		$this->display();
		//echo "Hello ".session('uid');
    }
}