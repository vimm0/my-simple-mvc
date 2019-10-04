<?php

require __DIR__.'/../src/controllers/FrontController.php';
require __DIR__.'/../src/controllers/RootController.php';

(new FrontController())->run();
