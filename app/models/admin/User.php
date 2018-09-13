<?php

namespace app\models\admin;

class User extends \app\models\User {

    public $attributes = [
        'id' => '',
        'login' => '',
        'password' => '',
        'name' => '',
        'email' => '',
        'address' => '',
        'role' => ''
    ];

    public $rules = [
        'required' => [
            ['login'],
            ['name'],
            ['email'],
            ['role']
        ],
        'email' => [
            ['email']
        ]
    ];

    public function checkUnique() {
        $user = \R::findOne('user', '(login = ? OR email = ?) AND id <> ?', [$this->attributes['login'], $this->attributes['email'], $this->attributes['id']]);
        if($user) {
            if($user->login == $this->attributes['login']){
                $this->errors['unique'][] = 'This login has taken';
            }
            if($user->email == $this->attributes['email']){
                $this->errors['unique'][] = 'This email has email';
            }
            return false;
        }

        return true;
    }

}