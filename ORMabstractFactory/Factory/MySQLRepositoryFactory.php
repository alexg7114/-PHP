<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\MySQLUserRepository;
use AbstractFactory\Repository\MySQLOrderRepository;
use AbstractFactory\Db\MySQL;

class MySQLRepositoryFactory implements RepositoryFactoryInterface
{
    private $mySQLConnection;
    
    public function __construct(MySQL $mySQLConnection)
    {
        $this->mySQLConnection = $mySQLConnection;
    }
    
    public function createUserRepository(): UserRepositoryInterface
    {
        return new MySQLUserRepository($this->mySQLConnection);
    }
    
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new MySQLOrderRepository($this->mySQLConnection);
    }
}
