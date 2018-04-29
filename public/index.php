<?php

require_once dirname(__DIR__ ). "/config/init.php";
require_once LIBS . '/functions.php';

new \eshop\App();
\eshop\App::$app->setProperty('test', 'test');
debug(\eshop\App::$app->getProperties());
