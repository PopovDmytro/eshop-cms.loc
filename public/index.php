<?php

require_once dirname(__DIR__ ). "/config/init.php";
require_once LIBS . '/functions.php';

new \eshop\App();

throw new Exception('Message lorem lorem', 404);

