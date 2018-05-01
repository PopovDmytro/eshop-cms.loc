<?php

namespace app\controllers;

class MainController extends AppController {

    public function indexAction() {
        $this->setMeta('Main/index', 'main controller, index action', 'controller, action, index, main');

        $name = 'John';
        $age = 30;
        $names = ['Ag', 'Bag', 'Mag'];
        $this->set(compact('name', 'age', 'names'));
    }
}