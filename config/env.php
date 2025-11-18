<?php
return [
    'db' => [
        'dsn' => 'mysql:host=127.0.0.1;dbname=apiphp;charset=utf8mb4',
        'user' => 'root',
        'pass' => ''
    ],
    'app' => [
        'env' => 'local',
        'debug' => true,
        'base_url' => 'http://localhost/api-php-native-siska/public',
        'jwt_secret' => 'siskawatiharuntonapa10082005wans32chars',
        'allowed_origins' => ['http://localhost:3000', 'http://localhost']
    ]
];
