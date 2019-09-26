<?php

require __DIR__.'/Controller.php';

require __DIR__.'/../models/model.php';

class RootController extends Controller {

    public function get() {
        return view('root', [
            'title' => 'hello world',
            'array' => getFooBarBaz(),
        ]);
    }
}
