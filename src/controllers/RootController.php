<?php

require __DIR__.'/../core/Controller.php';

require __DIR__.'/../models/FooBarBaz.php';

class RootController extends Controller {

    public function get(): string {
        return view('root', [
            'title' => 'hello world',
            'array' => FooBarBaz::get(),
        ]);
    }
}
