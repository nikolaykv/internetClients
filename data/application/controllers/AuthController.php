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
                        'message' => 'Пользователь успешно зарегистрирован в системе!'
                    ];
                    // TODO редирект и вывод информационного сообщения об успехе куда-нибудь
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

                if ($result and count($result) > 0)  {
                    $response = [
                        'status' => true,
                        'type' => 1,
                        'message' => 'Пользователь успешно авторизовался в системе!',
                    ];
                    // TODO запись данных о пользователе в сессию и отправка cookie
                    // TODO редирект и вывод информационного сообщения об успехе
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
}