<?php

namespace App\Repositories\Implementations;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function all()
    {
        try {
            return Customer::all();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function find($id)
    {
        try {
            return Customer::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return null;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function create(array $data)
    {
        try {
            return Customer::create($data);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function update($id, array $data)
    {
        try {
            $customer = Customer::findOrFail($id);
            $customer->update($data);
            return $customer;
        } catch (ModelNotFoundException $e) {
            return null;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            return Customer::destroy($id);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
