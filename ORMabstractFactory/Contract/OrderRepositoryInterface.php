<?php

declare(strict_types=1);

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\Order;

interface OrderRepositoryInterface
{
    public function add(Order $order);
    
    public function delete(Order $order);
    
    public function update(Order $order);
}