<?php

require_once dirname(__DIR__).'/vendor/autoload.php';

session_start();

use \Symfony\Component\Dotenv\Dotenv;
use \Symfony\Component\Debug\Debug;
use \Symfony\Component\Debug\DebugClassLoader;
use \Symfony\Component\Debug\ErrorHandler;
use \Symfony\Component\Debug\ExceptionHandler;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

(new Dotenv())->load(dirname(__DIR__).'/.env');

Debug::enable();
DebugClassLoader::enable();
ErrorHandler::register();
ExceptionHandler::register();
set_time_limit(0);

!empty($_SERVER['HTTP_HOST']) ? define("URL_BASE", "http://".$_SERVER['HTTP_HOST']) : define("URL_BASE", "#");
