<?php

namespace Config;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

class EntityDB
{
    private $entityManager;

    public function __construct()
    {
        $conn = array(
            'dbname' => 'seinf_db',
            'user' => 'root',
            'password' => 'root',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
        );

        $config = Setup::createConfiguration(true);
        $driver = new AnnotationDriver(new AnnotationReader(), dirname(__DIR__)."/app/Models/");

        AnnotationRegistry::registerLoader('class_exists');
        $config->setMetadataDriverImpl($driver);

        $this->entityManager = EntityManager::create($conn, $config);

        $platform = $this->entityManager->getConnection()->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('enum', 'string');
    }

    /**
     * @return mixed
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }
}