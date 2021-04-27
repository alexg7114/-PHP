<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Entity\User;

class OracleUserRepository extends BaseOracleRepository
    implements UserRepositoryInterface
{    
    public function add(User $user)
    {
        // Для коннекта к oracle используется $this->getOracleConnection().
        echo 'Добавляем в oracle пользователя $user.' . PHP_EOL;
    }
    
    public function delete(User $user)
    {
        // Для коннекта к oracle используется $this->getOracleConnection().
        echo 'Удаляем в oracle пользователя $user.' . PHP_EOL;
    }
    
    public function update(User $user)
    {
        // Для коннекта к oracle используется $this->getOracleConnection().
        echo 'Обновляем в oracle пользователя $user.' . PHP_EOL;
    }
}