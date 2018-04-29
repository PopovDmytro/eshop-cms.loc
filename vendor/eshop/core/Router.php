<?php

namespace eshop;

class Router {

    protected static $routes = [];
    protected static $rout = [];

    public static function add($regexp, $route = []) {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes() {
        return self::$routes;
    }

    public static function getRout() {
        return self::$rout;
    }

    public static function dispatch($url) {
        if(self::matchRoute($url)){
                
        } else {

        }
    }

    public static function matchRoute($url) {

    }

}