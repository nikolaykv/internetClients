<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function allCategories() {
        $sql = $this->dataBase->row('SELECT c.id, c.title, c.description, c.parent_id FROM categories c ORDER BY c.id ASC;');

        return $sql;
    }

    public function getTreeCategories($parent) {
        $sql = $this->dataBase->row('SELECT c.id, c.title, c.description, c.parent_id FROM categories c WHERE c.parent_id = ' . $parent .' ORDER BY c.title DESC;');

        return $sql;
    }
}