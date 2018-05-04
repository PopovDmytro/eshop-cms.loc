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
        $related = \R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?", [$product->id]);
        //write in cookies viewed product

        //viewed products

        //gallery
        $gallery = \R::findAll('gallery', 'product_id = ?', [$product->id]);
        //product modifications



        $this->setMeta($product->title, $product->descriprion, $product->keywords);
        $this->set(compact('product', 'related', 'gallery'));
    }
}