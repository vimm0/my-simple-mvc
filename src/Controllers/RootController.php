<?php

namespace App\Controllers;

use App\Models\FooBarBaz;
use App\Controllers\Controller;

class RootController extends Controller
{
    public function get(): string
    {
        return view('root', [
            'title' => 'hello world',
            'array' => FooBarBaz::get(),
        ]);
    }
}
