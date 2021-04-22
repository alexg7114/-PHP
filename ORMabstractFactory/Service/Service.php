<?php

declare(strict_types=1);

namespace AbstractFactory\Service;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Entity\Order;
use AbstractFactory\Entity\User;

class Service
{
    private $userRepository;
    
    private $orderRepository;

    public function __construct(RepositoryFactoryInterface $repositoryFactory)
    {
        $this->userRepository = $repositoryFactory->createUserRepository();
        $this->orderRepository = $repositoryFactory->createOrderRepository();
    }
    
    public function addUser(): void {
        
        $user = new User();
        
        $this->userRepository->add($user);
    }
    
    public function addOrder(): void {
        
        $order = new Order();
        
        $this->orderRepository->add($order);
    }
}