<?php

namespace app\controllers;

class ProductController extends AppController {

    public function viewAction() {
        $alias = $this->route['alias'];
        $product = \R::findOne('product', "alias = ? AND status = '1'", [$alias]);
        if(!$product) {
            throw new \Exception("Page did not find", 404);
        }

        //breadcrumbs

        //bundle products

        //write in cookies viewed product

        //viewed products

        //product modifications

        //gallery

        $this->setMeta($product->title, $product->descriprion, $product->keywords);
        $this->set(compact('product'));
    }
}