<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\MySQL;

abstract class BaseMySQLRepository
{
    private $mySQLConnection;
    
    public function __construct(MySQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }
    
    public function getMySQLConnection(): MySQL
    {
        return $this->mySQLConnection;
    }
}