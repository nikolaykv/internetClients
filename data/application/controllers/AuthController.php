<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;

class AuthController extends Controller
{
    public function loginAction()
    {
        $this->viewData->commonLayout = 'custom';
        $this->viewData->renderViews('Вход', array('route' => $this->routesData['action']));
    }

    public function registerAction()
    {
        $this->viewData->commonLayout = 'custom';
        $this->viewData->renderViews('Вход');
    }

    public function signupAction()
    {
        if ($_POST) {
            // Валидация данных в базовом контролере
            $validateErrors = $this->validateData($_POST);

            if (!empty($validateErrors)) {
                $response = [
                    'status' => false,
                    'type' => 0,
                    'message' => 'Ошибки валидации',
                    'fields' => $validateErrors
                ];
                echo json_encode($response);
                die();
            } else {
                $result = $this->model->register($_POST);

                if ($result) {
                    $response = [
                        'status' => $result,
                        'type' => 1,
                        'message' => 'Пользователь успешно зарегистрирован в системе!',
                        'action' => 'register'
                    ];
                } else {
                    $response = [
                        'status' => $result,
                        'type' => 2,
                        'fields' => 'В системе уже имеется пользователь с указанными данными!'
                    ];
                }
                echo json_encode($response);
            }
        } else {
            View::errorCode(404);
        }
    }

    public function signInAction()
    {
        if ($_POST) {
            $validateErrors = $this->validateData($_POST);

            if (!empty($validateErrors)) {
                $response = [
                    'status' => false,
                    'type' => 0,
                    'message' => 'Ошибки валидации',
                    'fields' => $validateErrors
                ];
                echo json_encode($response);
                die();
            } else {
                $result = $this->model->getUser($_POST);

                if ($result and count($result) > 0) {
                    $response = [
                        'status' => true,
                        'type' => 1,
                        'message' => 'Вы успешно авторизованы!',
                        'action' => 'login',
                        'user_data' => [
                            'id' => $result[0]['id'],
                            'name' => $result[0]['name'],
                            'surname' => $result[0]['surname'],
                            'email' => $result[0]['email'],
                            'is_admin' => $result[0]['is_admin'],
                            'created_at' => $result[0]['created_at'],
                        ]
                    ];
                    echo json_encode($response);
                } else {
                    $response = [
                        'status' => false,
                        'type' => 2,
                        'fields' => 'Данный пользователь ранее не регистрировался в системе!',
                    ];
                    echo json_encode($response);
                }
            }

        } else {
            View::errorCode(404);
        }
    }

    public function successAction()
    {
        if ($_POST) {
            if ($_POST['action'] === 'register') {
                $_SESSION['register_success'] = [
                    'status' => $_POST['status'],
                    'register' => $_POST['type'],
                    'message' => $_POST['message']
                ];
            } elseif ($_POST['action'] === 'login') {
                $_SESSION['user'] = $_POST['user_data'];
            }
        } else {
            View::errorCode(404);
        }
    }
}