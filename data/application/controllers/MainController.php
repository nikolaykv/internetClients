<?php

namespace application\controllers;
use application\core\Controller;

/**
 * Class MainController
 * @package application\controllers
 */
class MainController extends Controller
{
    /**
     * Отдаст главную страницу
     */
    public function indexAction()
    {
        $localhost = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'];
        $this->viewData->renderViews('Главная страница', array(), $localhost);
    }

    public function loginAction() {
        $this->viewData->commonLayout = 'custom';
        $this->viewData->renderViews('Вход');
    }

    public function registerAction() {
        $this->viewData->commonLayout = 'custom';
        $this->viewData->renderViews('Вход');
    }

    /**
     * Перенаправит на adminer
     */
    public function adminerAction()
    {
        $this->viewData->redirect('http://' . $_SERVER['SERVER_NAME'] . ':8080');
    }
}