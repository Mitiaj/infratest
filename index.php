<?php

spl_autoload_register(function($class){
    $class = str_replace('\\', '/', $class);
    include __DIR__ .'/'. $class . '.php';
});

call_user_func('\Controller\MainController::indexAction');