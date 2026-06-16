<?php

namespace app\admin\controller;

class Index extends C
{
    public function index()
    {
        $this->islogin();
        return $this->fetch('index');
    }
    public function main()
    {
        $this->islogin();
        return $this->fetch();
    }
    public function web_cache()
    {
        $this->islogin();
        if(request()->isPost()) {
            deleteDir('../runtime');
            return 'ok';
        }
        return $this->fetch();
    }
    public function out(){
        session('loginSession', null);
        return $this->redirect('/index/login.html',302);
    }
    public function login()
    {
        $this->Administrator = config('admin.Administrator');
        if(request()->isPost()) {
            $data = input('post.');
            $res = ['code'=>0];
            $username = input('username');
            $password = input('password');
            /*判断用户名密码*/
             if($data['username']==$this->Administrator[0] && $data['password']==$this->Administrator[1]) {
                 $res['code']=1;
                 $res['msg']='登录成功';
                 session('loginSession', $data['username']);
                 $loginSession = session('loginSession');
                 return $this->redirect('index/index', 302);
             }else {
                 $res['msg']='登录失败';
                 $this->error('用户名密码错误');
             }
            //  return json($res);
            
        }else {
            $loginSession = session('loginSession');
            if($loginSession == $this->Administrator[0]){
                return $this->redirect('index/index', 302);
            }
        
            return $this->fetch('login');
        }
        
    }

}
