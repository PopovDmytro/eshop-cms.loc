<?php

namespace app\models\admin;

use app\models\AppModel;

class Product extends AppModel {

    public $attributes = [
        'title' => '',
        'category_id' => '',
        'keywords' => '',
        'description' => '',
        'price' => '',
        'old_price' => '',
        'content' => '',
        'status' => '',
        'hit' => '',
        'alias' => '',
        'brand_id' => '' //table column deleted in lesson
    ];

    public $rules = [
        'required' => [
            ['title'],
            ['category_id']
        ],
        'integer' => [
            ['category_id']
        ]
    ];

    public function editFilter ($id, $data) {
        $filter = \R::getCol('SELECT attr_id FROM attribute_product WHERE product_id = ?', [$id]);
        if(empty($data['attrs']) && !empty($filter)) {
            \R::exec("DELETE FROM attribute_product WHERE product_id = ? ", [$id]);
            return;
        }

        if( empty($filter) && !empty($data['attrs'])) {
            $sql_part = '';
            foreach ($data['attrs'] as $v) {
                $sql_part .=  "($v, $id),";
            }
            $sql_part = rtrim($sql_part, ',');
            \R::exec("INSERT INTO attribute_product (attr_id, product_id) VALUES $sql_part");
            return;
        }

        if(!empty($data['attrs'])) {
            $result = array_diff($filter, $data['attrs']);
            if(!$result) {
                \R::exec("DELETE FROM attribute_product WHERE product_id = ? ", [$id]);
                $sql_part = '';
                foreach ($data['attrs'] as $v) {
                    $sql_part .=  "($v, $id),";
                }
                $sql_part = rtrim($sql_part, ',');
                \R::exec("INSERT INTO attribute_product (attr_id, product_id) VALUES $sql_part");
            }
        }
    }

}