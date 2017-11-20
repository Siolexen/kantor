<?php

class Controller
{
    public static function CreateView ($view) {
        extract(static::render());
        include './views/'.$view.'.php';
    }
}