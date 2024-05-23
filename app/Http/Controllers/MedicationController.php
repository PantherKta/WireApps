<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\MedicationRepositoryInterface;

class MedicationController extends Controller
{
    protected $medicationRepository;

    public function __construct(MedicationRepositoryInterface $medicationRepository)
    {
        $this->medicationRepository = $medicationRepository;
    }

    public function index()
    {
        return $this->medicationRepository->all();
    }

    public function store(Request $request)
    {
        return $this->medicationRepository->create($request->all());
    }

    public function update(Request $request, Medication $medication)
    {
        return $this->medicationRepository->update($medication->id, $request->all());
    }

    public function destroy(Medication $medication)
    {
        return $this->medicationRepository->delete($medication->id);
    }
}
