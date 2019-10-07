<?php

namespace App\Models;

use App\Models\Model;

class FooBarBaz extends Model
{
    public static function get(): array
    {
        return [
            'foo',
            'bar',
            'baz',
        ];
    }
}
