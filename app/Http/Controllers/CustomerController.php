<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    protected $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        return $this->customerRepository->all();
    }

    public function store(Request $request)
    {
        return $this->customerRepository->create($request->all());
    }

    public function update(Request $request, Customer $customer)
    {
        return $this->customerRepository->update($customer->id, $request->all());
    }

    public function destroy(Customer $customer)
    {
        return $this->customerRepository->delete($customer->id);
    }
}
