<?php

namespace application\models;

use application\core\Model;

class Auth extends Model
{
    public function register($data)
    {
        $data['is_admin'] = 2;

        $sql = $this->dataBase->insertRow(
            "INSERT INTO users (name, surname, email, password, is_admin)
                  VALUES ('" . $data['name'] . "', '" . $data['surname'] . "', '" . $data['email'] . "', '" . md5($data['password']) . "', '" . $data['is_admin'] . "');"
        );

        return $sql;
    }

    public function getUser($data)
    {
        $sql = $this->dataBase->row("SELECT * FROM users WHERE email = '" . $data["email"] . "' AND password = '" . md5($data['password']) . "';");

        return $sql;
    }
}