<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;

class UserController extends Controller
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
                $result = $this->model->registerNewSimpleUser($_POST);

                if ($result) {
                    $response = [
                        'status' => $result,
                        'type' => 1,
                        'message' => 'Пользователь успешно зарегистрирован в системе!'
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
            $result = $this->model->getSimpleUser($_POST);

            if ($result and count($result) > 0) {
                // TODO сообщение об успехе
                $this->viewData->redirect('http://' . $_SERVER['SERVER_NAME'] . '/dashboard');
            }
        } else {
            // TODO сообщение об не поддерживаем для данного маршрута методе
            View::errorCode(404);
        }
    }
}