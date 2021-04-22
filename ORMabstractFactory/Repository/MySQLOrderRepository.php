<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Entity\Order;

class MySQLOrderRepository extends BaseMySQLRepository
    implements OrderRepositoryInterface
{    
    public function add(Order $order)
    {
        // Для коннекта к mySQL используется $this->getMySQLConnection().
        echo 'Добавляем в mySQL заказ $order.' . PHP_EOL;
    }
    
    public function delete(Order $order)
    {
        // Для коннекта к mySQL используется $this->getMySQLConnection().
        echo 'Удаляем в mySQL заказ $order.' . PHP_EOL;
    }
    
    public function update(Order $order)
    {
        // Для коннекта к mySQL используется $this->getMySQLConnection().
        echo 'Обновляем в mySQL заказ $order.' . PHP_EOL;
    }
}