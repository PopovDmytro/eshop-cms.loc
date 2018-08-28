<?php

namespace app\controllers;

use app\models\User;

class UserController extends AppController {

    public function signupAction () {

        if(isset($_SESSION['user'])) redirect();

        if(!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if(!$user->validate($data) || !$user->checkUnique()) {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
            } else {
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if($user->save('user')) {
                    $_SESSION['success'] = ' registration OK';
                } else {
                    $_SESSION['error'] = 'ERROR !';
                }
            }
            redirect();
        }

        $this->setMeta('Register');
    }

    public function loginAction () {

        if(isset($_SESSION['user'])) redirect();

        if(!empty($_POST)) {
            $user = new User();
            if($user->login()) {
                $_SESSION['success'] = 'You are logged';
            } else {
                $_SESSION['error'] = 'Login / Pass wrong';
            }
            redirect();
        }

        $this->setMeta('Enter');
    }

    public function logoutAction () {
        if(isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect();
    }

}