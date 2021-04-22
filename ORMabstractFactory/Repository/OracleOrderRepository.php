<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Entity\Order;

class OracleOrderRepository extends BaseOracleRepository
    implements OrderRepositoryInterface
{    
    public function add(Order $order)
    {
        // Для коннекта к oracle используется $this->getOracleConnection().
        echo 'Добавляем в oracle заказ $order.' . PHP_EOL;
    }
    
    public function delete(Order $order)
    {
        // Для коннекта к oracle используется $this->getOracleConnection().
        echo 'Удаляем в postgres заказ $order.' . PHP_EOL;
    }
    
    public function update(Order $order)
    {
        // Для коннекта к oracle используется $this->getOracleConnection().
        echo 'Обновляем в oracle заказ $order.' . PHP_EOL;
    }
}