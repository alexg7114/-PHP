<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Postgres;

abstract class BasePostgresRepository
{
    private $postgresConnection;
    
    public function __construct(Postgres $postgresConnection)
    {
        $this->postgresConnection = $postgresConnection;
    }
    
    public function getPostgresConnection(): Postgres
    {
        return $this->postgresConnection;
    }
}