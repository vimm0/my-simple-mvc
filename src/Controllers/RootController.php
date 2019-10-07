<?php

namespace App\Controllers;

use App\Models\FooBarBaz;
use App\Controllers\Controller;

class RootController extends Controller
{
    public function get()
    {
        echo view('root', [
            'title' => 'hello world',
            'array' => FooBarBaz::get(),
        ]);
    }
}
