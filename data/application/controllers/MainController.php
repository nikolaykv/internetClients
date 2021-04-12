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

    public function dashboardAction()
    {
        $this->viewData->commonLayout = 'dashboard';

        $result = $this->model->allCategories();


        for ($i = 0; $i < count($result); $i++) {
            $treeCategories[] = $this->model->getTreeCategories($result[$i]['id']);
        }


        $this->viewData->renderViews('Личный кабинет');

    }


    /**
     * Перенаправит на adminer
     */
    public function adminerAction()
    {
        $this->viewData->redirect('http://' . $_SERVER['SERVER_NAME'] . ':8080');
    }


}