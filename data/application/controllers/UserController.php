<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;

class UserController extends Controller
{
    public function loginAction()
    {
        $this->viewData->commonLayout = 'custom';
        $this->viewData->renderViews('Вход');
    }

    public function registerAction()
    {
        $this->viewData->commonLayout = 'custom';
        $this->viewData->renderViews('Вход');
    }

    public function signupAction()
    {
        if ($_POST) {
            $result = $this->model->registerNewSimpleUser($_POST);

            if ($result) {
                // TODO сообщение об успехе и какой-нибудь редирект
                echo 'Успех регистрации';
            }
        } else {
            // TODO сообщение об не поддерживаем для данного маршрута методе
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