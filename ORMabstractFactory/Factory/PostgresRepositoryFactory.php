<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\PostgresUserRepository;
use AbstractFactory\Repository\PostgresOrderRepository;
use AbstractFactory\Db\Postgres;

class PostgresRepositoryFactory implements RepositoryFactoryInterface
{
    private $postgresConnection;
    
    public function __construct(Postgres $postgresConnection)
    {
        $this->postgresConnection = $postgresConnection;
    }
    
    public function createUserRepository(): UserRepositoryInterface
    {
        return new PostgresUserRepository($this->postgresConnection);
    }
    
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new PostgresOrderRepository($this->postgresConnection);
    }
}
