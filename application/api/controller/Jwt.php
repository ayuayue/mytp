<?php


namespace app\api\controller;


use think\Controller;

class Jwt extends Controller
{
    protected $middleware =[
        \app\http\middleware\jwt::class
    ];
    public function index()
    {
        return 'this is a route  => api';
    }

    public function get()
    {
        return createToken();
    }
    public function check()
    {
        return 'check success';
    }
}