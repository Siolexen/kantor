<?php
class Route
{
    private static $isValid = false;

    private static function endsWith($uri, $route) {
        return $route === "" || (($temp = strlen($uri) - strlen($route)) >= 0 && strpos($uri, $route, $temp) !== false);
    }

    public static function set($route, $function) {
        if (self::endsWith($_SERVER['REQUEST_URI'], $route)) {
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