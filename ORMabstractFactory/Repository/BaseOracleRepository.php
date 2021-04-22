<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Oracle;

abstract class BaseOracleRepository
{
    private $oracleConnection;
    
    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }
    
    public function getOracleConnection(): Oracle
    {
        return $this->oracleConnection;
    }
}