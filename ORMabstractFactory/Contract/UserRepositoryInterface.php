<?php

declare(strict_types=1);

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\User;

interface UserRepositoryInterface
{
    public function add(User $user);
    
    public function delete(User $user);
    
    public function update(User $user);
}