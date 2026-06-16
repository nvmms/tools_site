<?php

namespace app\admin\controller;
use think\Controller;

class C extends Controller
{
    public function initialize()
    {
        //后台管理账号
        $this->Administrator = config('admin.Administrator');
    }
    public function islogin()
    {
        $loginSession = session('loginSession');
        if(!$loginSession||$loginSession!=$this->Administrator[0]){
            exit($this->redirect('/index/login',302));
        }
        $this->assign('name', $this->Administrator[0]);
    }
}