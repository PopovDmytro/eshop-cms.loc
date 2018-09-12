<?php

namespace app\controllers\admin;

use eshop\Cache;

class CacheController extends AppController {

    public function indexAction () {
        $this->setMeta('Cache manage');
    }

    public function deleteAction () {
        $key = isset($_GET['key']) ? $_GET['key'] : null;
        $cache = Cache::instance();
        switch ($key) {
            case 'category':
                $cache->delete('cats');
                $cache->delete('eshop_menu');
                break;
            case 'filter':
                $cache->delete('filter_group');
                $cache->delete('filter_attrs');
                break;
            default :
                $_SESSION['error'] = 'Cache manage error';
                redirect();

        }
        $_SESSION['success'] = 'Chosen cache deleted';
        redirect();
    }

}