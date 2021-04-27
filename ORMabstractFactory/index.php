<?php

declare(strict_types=1);

namespace AbstractFactory;

use AbstractFactory\Factory\PostgresRepositoryFactory;
use AbstractFactory\Factory\MySQLRepositoryFactory;
use AbstractFactory\Factory\OracleRepositoryFactory;
use AbstractFactory\Db\Postgres;
use AbstractFactory\Db\MySQL;
use AbstractFactory\Db\Oracle;
use AbstractFactory\Service\Service;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$postgresRepositoryFactory = new PostgresRepositoryFactory(new Postgres());
$serviceWithPostgresRepositories = new Service($postgresRepositoryFactory);

$serviceWithPostgresRepositories->addUser();
$serviceWithPostgresRepositories->addOrder();

$mySQLRepositoryFactory = new MySQLRepositoryFactory(new MySQL());
$serviceWithMySQLRepositories = new Service($mySQLRepositoryFactory);

$serviceWithMySQLRepositories->addUser();
$serviceWithMySQLRepositories->addOrder();

$oracleRepositoryFactory = new OracleRepositoryFactory(new Oracle());
$serviceWithOracleRepositories = new Service($oracleRepositoryFactory);

$serviceWithOracleRepositories->addUser();
$serviceWithOracleRepositories->addOrder();