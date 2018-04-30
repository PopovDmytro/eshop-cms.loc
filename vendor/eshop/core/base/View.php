<?php

namespace eshop\base;

use eshop\App;

class View {

    public $route;
    public $controller;
    public $model;
    public $layout;
    public $view;
    public $prefix;
    public $data = [];
    public $meta = [];

    public function __construct($route, $layout = '', $view = '', $meta) {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $view;
        $this->prefix = $route['prefix'];
        $this->meta = $meta;

        if ($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render($data) {
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        if (is_file($viewFile)) {
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        } else {
            throw new \Exception("Not found view {$viewFile}", 500);
        }

        if($this->layout !== false) {
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($layoutFile)){
                require_once $layoutFile;
            } else {
                throw new \Exception("Not found layout {$layoutFile}", 500);
            }
        }
    }

    public function getMeta() {
            
    }

}