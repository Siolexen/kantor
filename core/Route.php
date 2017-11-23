<?php
class Route
{
    private static $isValid = false;

    private static function endsWith($haystack, $needle) {
        return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
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