<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use  \Firebase\JWT\JWT;
// 应用公共文件
const ENCRYPMETHOD = 'HS256';
function createToken($user_id = '01'){
    $key = config('jet.key');
    $payload = [
        'exp' => config('jwt.exp'),
        'lat' => config('jwt.lat'),
        'nbf' => config('jwt.nbf'),
        'user_id' => $user_id
    ];
    $token =JWT::encode($payload,$key,ENCRYPMETHOD);
    return $token;
}

function checkToken($token){
    try {
        JWT::decode($token,config('jwt.key'),array(ENCRYPMETHOD));
    }catch (Exception $e){
        return false;
    }
}

