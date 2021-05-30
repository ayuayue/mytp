<?php
return [
    'key' => 'mytp-jwt-key',
    'iss' => 'mytp',
    'lat' => time(),
    'nbf' => time(),
    'iat' => time(),
    'exp' => time() + 24 * 3600 *7,
    'exceptMethod' => [
        'login'
    ]
];
