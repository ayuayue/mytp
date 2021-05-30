<?php

namespace app\http\middleware;

use think\Request;
use \app\common\controller\Jwt as CommonJwt;
class jwt
{
    public function handle($request, \Closure $next)
    {
        $res = new Request();
        $authorization =   $res->header('Authorization');
        if(!CommonJwt::verifyToken($authorization)){
            $fail = [
                'code' => '401',
                'message' => '认证失败,请重新认证',
            ];
            return response($fail,401,[],'json');
        }
        return $next($request);
    }
}
