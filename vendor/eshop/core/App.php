<?php

namespace eshop;

class App {

    public static $app;

    public function __construct() {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        //registry
        self::$app = Registry::instance();
        $this->getParams();
        //error handler
        new ErrorHandler();
        //routing
        Router::dispatch($query);
    }

    protected function getParams() {
        $params = require_once CONF . '/params.php';

        if(!empty($params)) {
            foreach ($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }
}