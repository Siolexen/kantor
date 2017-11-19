<?php

class Homepage extends Controller
{
    public static function render() {
        $text = 'Hello World';

        return [
            'text' => $text
        ];
    }
}