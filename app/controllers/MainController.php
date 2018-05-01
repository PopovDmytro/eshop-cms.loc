<?php

namespace app\controllers;

use eshop\Cache;

class MainController extends AppController {

    public function indexAction() {
        $posts = \R::findAll('test');

        $this->setMeta('Main/index', 'main controller, index action', 'controller, action, index, main');

        $name = 'John';
        $age = 30;
        $names = ['Ag', 'Bag', 'Mag'];

        //Cache
        $cache = Cache::instance();
//        $cache->set('test', $names);
//        $cache->delete('test');
        $data = $cache->get('test');
        if($data) {
            $cache->set('test', $names);
        }
        //

        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}