<?php

require __DIR__.'/Model.php';

class FooBarBaz extends Model {

    public static function get(): array {
        return [
            'foo',
            'bar',
            'baz',
        ];
    }
}
