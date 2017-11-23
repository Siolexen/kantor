<?php

class Controller
{
    public static function CreateView ($view, $function) {
        extract($function);
        include './views/'.$view.'.php';
    }
}