<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

//think-auth 配置文件
use yunwuxin\auth\controller\ForgotPasswordController;
use yunwuxin\auth\controller\LoginController;
use yunwuxin\auth\controller\RegisterController;
use yunwuxin\auth\controller\ResetPasswordController;
use yunwuxin\auth\model\User;

return [
    'provider'                    => [
        'type'  => 'model',
        'model' => User::class
    ],
    'guard'                       => 'session',
    //设为false,则不注册路由
    'route'                       => [
        'group'       => 'auth',
        'controllers' => [
            'login'    => LoginController::class,
            'register' => RegisterController::class,
            'forgot'   => ForgotPasswordController::class,
            'reset'    => ResetPasswordController::class
        ]
    ],
    'object_permission_namespace' => '\\app\\policy\\',
    'object_permissions'          => [],
];