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
        'controller' => 'auth',
        'action' => 'login'
    ],
    'logout' => [
        'controller' => 'auth',
        'action' => 'logout'
    ],
    'register' => [
        'controller' => 'auth',
        'action' => 'register'
    ],
    'register-user' => [
        'controller' => 'auth',
        'action' => 'signup'
    ],
    'success' => [
        'controller' => 'auth',
        'action' => 'success'
    ],
    'login-user' => [
        'controller' => 'auth',
        'action' => 'signIn',
    ],
    'adminer' => [
        'controller' => 'main',
        'action' => 'adminer'
    ],
];