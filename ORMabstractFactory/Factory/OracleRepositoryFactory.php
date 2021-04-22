<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\OracleUserRepository;
use AbstractFactory\Repository\OracleOrderRepository;
use AbstractFactory\Db\Oracle;

class OracleRepositoryFactory implements RepositoryFactoryInterface
{
    private $oracleConnection;
    
    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }
    
    public function createUserRepository(): UserRepositoryInterface
    {
        return new OracleUserRepository($this->oracleConnection);
    }
    
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new OracleOrderRepository($this->oracleConnection);
    }
}
