<?php

class Form
{
    public static function post($array, $function)
    {
        $isSet = true;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            foreach ($array as $item) {
                if (isset($_POST[$item]) && strlen($_POST[$item]) === 0) {
                    $isSet = false;
                }
            }
            if ($isSet) {
                return $function->__invoke();
            }
        }
    }
}