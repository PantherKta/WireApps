<?php

namespace App\Repositories\Implementations;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
        try {
            return User::all();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function find($id)
    {
        try {
            return User::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return null;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function create(array $data)
    {
        try {
            return User::create($data);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function update($id, array $data)
    {
        try {
            $user = User::findOrFail($id);
            $user->update($data);
            return $user;
        } catch (ModelNotFoundException $e) {
            return null;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            return User::destroy($id);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
