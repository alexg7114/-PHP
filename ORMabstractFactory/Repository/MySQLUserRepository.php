<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Entity\User;

class MySQLUserRepository extends BaseMySQLRepository
    implements UserRepositoryInterface
{    
    public function add(User $user)
    {
        // Для коннекта к mySQL используется $this->getMySQLConnection().
        echo 'Добавляем в mySQL пользователя $user.' . PHP_EOL;
    }
    
    public function delete(User $user)
    {
        // Для коннекта к mySQL используется $this->getMySQLConnection().
        echo 'Удаляем в mySQL пользователя $user.' . PHP_EOL;
    }
    
    public function update(User $user)
    {
        // Для коннекта к mySQL используется $this->getMySQLConnection().
        echo 'Обновляем в mySQL пользователя $user.' . PHP_EOL;
    }
}