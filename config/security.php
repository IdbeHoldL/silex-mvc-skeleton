<?php

$app['security.firewalls'] = array(
    'secured_area' => array(
        'pattern' => '^.*$',
        'anonymous' => true,
        'form' => array(
            'login_path' => '/authentication/check_login',
        ),
        'users' => $app->share(function ($app) {
            return $app['user.manager'];
        }),
    ),
);