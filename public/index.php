<?php

require __DIR__.'/../utils/helpers.php';
require __DIR__.'/../models/model.php';

echo view('root', [
    'title' => 'hello world',
    'array' => getFooBarBaz(),
]);