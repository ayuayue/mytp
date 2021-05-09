<?php


namespace app\index\controller;


use app\http\middleware\jwt;
use think\Controller;

class Login extends Controller
{
    protected $middleware = [
        'jwt' => [
            'only' => ['login']
        ]
    ];
    public function login()
    {
        return view();
    }

    public function logout($id = null)
    {

    }
}