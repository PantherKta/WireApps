<?php
// app/Providers/AuthServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use App\Repositories\Implementations\AuthRepository;

class AuthServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
    }
}
