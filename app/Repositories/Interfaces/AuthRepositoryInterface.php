<?php
namespace App\Repositories\Interfaces;

use App\Models\User;

interface AuthRepositoryInterface
{
    public function authenticate(string $username, string $password): ? User;
}
