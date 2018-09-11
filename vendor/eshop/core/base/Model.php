<?php

namespace eshop\base;

use eshop\Db;
use Valitron\Validator;

abstract class Model {

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct() {
        //db
        Db::instance();
    }

    public function load($data) {
        foreach ($this->attributes as $name => $value) {
            if(isset($data[$name])) {
                $this->attributes[$name] = $data[$name];
            }
        }
    }

    public function save($table) {
        $tbl = \R::dispense($table);

        foreach ($this->attributes as $name => $value) {
            $tbl->$name = $value;
        }

        return \R::store($tbl);
    }

    public function update($table, $id) {
        $bean = \R::load($table, $id);

        foreach ($this->attributes as $name => $value) {
            $bean->$name = $value;
        }

        return \R::store($bean);
    }

    public function validate($data) {

        //Validator::langDir(WWW . '/validator/lang'); // change dir with languages
        //Validator::lang('ru'); //change validate messages language

        $v = new Validator($data);
        $v->rules($this->rules);
        if($v->validate()) {
            return true;
        }
        $this->errors = $v->errors();
        return false;
    }

    public function getErrors () {

        $errors = '<ul>';
        foreach ($this->errors as $error) {
            foreach ($error as $item) {
                $errors .= "<li>$item</li>";
            }
        }
        $errors .= '</ul>';

        $_SESSION['errors'] = $errors;
    }
}