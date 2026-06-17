<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::rule(':act', 'index/index');

// Route::get('think', function () {
//     return 'hello,ThinkPHP8!';
// });

// Route::get('hello/:name', 'index/hello');


// //后台域名
// Route::domain('admin.echeverra.cn', 'admin');/*填写你的后台域名*/

// //前台域名
// Route::domain('tool.echeverra.cn', function () {
//     Route::domain('tool.echeverra.cn', 'index');
//     Route::rule('404', 'index/e404');
//     //接口
//     Route::rule('doapi', 'index/api');
//     Route::rule('api', 'index/api');
//     //静态页面
//     Route::rule('ip/:ip', 'index/index?act=ip')->pattern(['ip' => '.*']);
//     Route::rule(':act', 'index/index');
// });
