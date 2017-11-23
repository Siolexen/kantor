<?php

class Homepage extends Controller
{
    public static function index() {
        $text = 'Hello World';

        return [
            'text' => $text
        ];
    }
}