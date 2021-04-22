<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Entity\Order;

class PostgresOrderRepository extends BasePostgresRepository
    implements OrderRepositoryInterface
{    
    public function add(Order $order)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Добавляем в postgres заказ $order.' . PHP_EOL;
    }
    
    public function delete(Order $order)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Удаляем в postgres заказ $order.' . PHP_EOL;
    }
    
    public function update(Order $order)
    {
        // Для коннекта к postgres используется $this->getPostgresConnection().
        echo 'Обновляем в postgres заказ $order.' . PHP_EOL;
    }
}