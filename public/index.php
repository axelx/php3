<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../protected/boot.php';
require __DIR__ . '/../protected/autoload.php';

//var_dump(ROOT_PATH_PROTECTED . '/config.php');
//$tt = include ROOT_PATH_PROTECTED . '/config.php';
//var_dump($tt);
T4\Mvc\Application
    ::instance()
    ->setConfig(
        new \T4\Core\Config(ROOT_PATH_PROTECTED . '/config.php')
    )
    ->run();