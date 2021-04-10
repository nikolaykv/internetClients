<?php

namespace application\core;

/**
 * Class Controller
 * @package application\core
 */
abstract class Controller
{
    /**
     * @var
     *
     * Данные маршрута
     */
    public $routesData;

    public $model;

    private $validationErrors = [];

    /**
     * @var \application\core\View
     *
     * Данные шаблона
     */
    public $viewData;

    /**
     * Controller constructor.
     * @param $allRoutes
     */
    public function __construct($allRoutes)
    {
        $this->routesData = $allRoutes;

        $this->viewData = new View($allRoutes);

        $this->model = $this->loadModel($allRoutes['controller']);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function loadModel($name)
    {
        $pathForModel = 'application\models\\' . ucfirst($name);

        if (class_exists($pathForModel)) {
            return new $pathForModel();
        } else {
            View::errorCode(500);
        }
    }

    public function validateData($data)
    {
        switch ($data) {
            case empty($data['name']):
                $this->validationErrors['name_error_required'] = 'Имя должно быть заполнено!';
                break;
            case mb_strlen($data['name']) > 10:
                $this->validationErrors['name_error_length'] = 'Имя не должно превышать 10 символов!';
                break;
            case empty($data['surname']):
                $this->validationErrors['surname_error_required'] = 'Фамилия должна быть заполнена!';
                break;

            case mb_strlen($data['surname']) > 15:
                $this->validationErrors['surname_error_length'] = 'Фамилия не должна превышать 15 символов!';
                break;
            case empty($data['email']):
                $this->validationErrors['email_error_required'] = 'Email должен быть заполнен!';
                break;

            case filter_var($data['email'], FILTER_VALIDATE_EMAIL):
                $this->validationErrors['email_error_invalid'] = 'Email не является валидным!';
                break;

            case empty($data['password']):
                $this->validationErrors['password_error_required'] = 'Пароль должен быть заполнен!';
                break;
            case mb_strlen($data['password']) > 20:
                $this->validationErrors['password_error_length'] = 'Пароль не должен превышать 20 символов!';
                break;
        }
        return $this->validationErrors;
    }
}