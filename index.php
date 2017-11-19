<?php
    spl_autoload_register(function ($class) {
        if (file_exists('./autoload/'.$class.'.php')) {
            require_once './autoload/'.$class.'.php';
        } else if (file_exists('./controllers/'.$class.'.php')) {
            require_once './controllers/'.$class.'.php';
        }
    });

    require_once 'Routes.php';
?>