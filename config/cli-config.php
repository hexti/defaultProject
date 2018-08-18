<?php

require_once 'config.php';

$database = new Config\EntityDB();
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($database->getEntityManager());