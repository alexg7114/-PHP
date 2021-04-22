<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Entity\User;

class PostgresUserRepository extends BasePostgresRepository
    implements UserRepositoryInterface
{    
    public function add(User $user)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Добавляем в postgres пользователя $user.' . PHP_EOL;
    }
    
    public function delete(User $user)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Удаляем в postgres пользователя $user.' . PHP_EOL;
    }
    
    public function update(User $user)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Обновляем в postgres пользователя $user.' . PHP_EOL;
    }
}