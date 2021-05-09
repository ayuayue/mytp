<?php


namespace app\test\controller;


use app\http\middleware\jwt;
use think\Controller;

class Index extends Controller
{
//    protected $middleware = ['jwt'=> jwt::class];
    public function index()
    {
        return 'test';
    }
}