<?php

namespace app\http\middleware;

use think\Request;

class jwt
{
    public function handle($request, \Closure $next)
    {
        $res = new Request();
        $authorization =   $res->header('authorization');
        if(!checkToken($authorization.'1')){
            $fail = [
                'code' => '1001',
                'message' => '认证失败',
            ];
            return response($fail,401,[],'json');
        }
        return $next($request);
    }
}
