<?php

namespace App\Repositories\Implementations;

use App\Models\User;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class AuthRepository implements AuthRepositoryInterface
{
    public function authenticate(string $username, string $password): ?User
    {
        try {
            $user = User::where('username', $username)->firstOrFail();

            if (password_verify($password, $user->password)) {
                return $user;
            } else {
                return null;
            }
        } catch (ModelNotFoundException $e) {
            return null;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
