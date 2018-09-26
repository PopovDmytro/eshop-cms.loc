<?php

namespace app\models\admin;

use app\models\AppModel;

class Currency extends AppModel {

    public $attributes = [
        'title' => '',
        'code' => '',
        'symbol_left' => '',
        'symbol_right' => '',
        'value' => '',
        'bass' => ''
    ];

    public $rules = [
        'required' => [
            ['title'],
            ['code'],
            ['value']
        ],
        'numeric' => [
            ['value']
        ]
    ];

}