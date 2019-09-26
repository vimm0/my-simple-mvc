<?php

require __DIR__.'/Controller.php';

require __DIR__.'/../models/FooBarBaz.php';

class RootController extends Controller {

    public function get() {
        return view('root', [
            'title' => 'hello world',
            'array' => FooBarBaz::get(),
        ]);
    }
}
