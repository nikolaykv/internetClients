<?php

/**
 * Файл с маршрутами
 */

return [
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    'dashboard' => [
        'controller' => 'main',
        'action' => 'dashboard'
    ],
    'login' => [
        'controller' => 'user',
        'action' => 'login'
    ],
    'register' => [
        'controller' => 'user',
        'action' => 'register'
    ],
    'register-user' => [
        'controller' => 'user',
        'action' => 'signup'
    ],
    'login-user' => [
        'controller' => 'user',
        'action' => 'signIn',
    ],
    'adminer' => [
        'controller' => 'main',
        'action' => 'adminer'
    ],
];