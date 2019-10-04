<?php

require __DIR__.'/Controller.php';

require __DIR__.'/../models/FooBarBaz.php';

class RootController extends Controller
{
    public function get(): void
    {
        echo view('root', [
            'title' => 'hello world',
            'array' => FooBarBaz::get(),
        ]);
    }
}
