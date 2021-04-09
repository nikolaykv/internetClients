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
        $this->viewData->renderViews('Главная страница');
    }

    /**
     * Перенаправит на adminer
     */
    public function adminerAction()
    {
        $this->viewData->redirect('http://' . $_SERVER['SERVER_NAME'] . ':8080');
    }
}