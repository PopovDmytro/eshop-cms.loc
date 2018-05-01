<?php

namespace app\controllers;

use eshop\Cache;

class MainController extends AppController {

    public function indexAction() {
        $brands = \R::find('brand', 'LIMIT 3');
        $this->setMeta('Home page', 'main controller, index action', 'controller, action, index, main');
        $this->set(compact('brands'));
    }
}