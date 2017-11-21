<?php
class Route
{
    public static $isValid = false;

    public static function set($route, $function) {
        if ($_GET['url'] == $route) {
            self::$isValid = true;
            $function->__invoke();
        }
    }

    public static function notFound() {
        if (!self::$isValid) {
            include './views/404.php';
        }
    }
}