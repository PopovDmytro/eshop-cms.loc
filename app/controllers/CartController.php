<?php
/**
 * Created by PhpStorm.
 * User: dimah
 * Date: 09-Aug-18
 * Time: 22:39
 */

namespace app\controllers;


class CartController extends AppController {

    public static function addAction(){

        $id = !empty($_GET['id']) ? (int)$_GET['id'] : null;
        $qty = !empty($_GET['qty']) ? (int)$_GET['qty'] : null;
        $mod_id = !empty($_GET['mod']) ? (int)$_GET['mod'] : null;
        $mod = null;
        if($id){
            $product = \R::findOne('product', 'id = ?', [$id]);

            if(!$product) {
                return false;
            }

            if($mod_id) {
                $mod = \R::findOne('modification', 'id = ? AND product_id = ?', [$mod_id, $id]);
            }
        }
        die;
    }
}