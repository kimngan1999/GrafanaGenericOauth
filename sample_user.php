<?php

declare(strict_types=1);

/*
 * Example Grafana user data that you'll fetch from your database in your application.
*/
return [
    'username' => 'kimngan',
    'email' => 'ngan85267@gmail.com',
    'dasboard_id' => 'oNNhAtdWz',
    'access_token' => md5(uniqid('123456', true)),
    'refresh_token' => md5(uniqid('123456', true))
];