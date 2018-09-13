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

}