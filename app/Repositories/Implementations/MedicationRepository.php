<?php

namespace App\Repositories\Implementations;

use App\Models\Medication;
use App\Repositories\Interfaces\MedicationRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class MedicationRepository implements MedicationRepositoryInterface
{
    public function all()
    {
        try {
            return Medication::all();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function find($id)
    {
        try {
            return Medication::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return null;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function create(array $data)
    {
        try {
            return Medication::create($data);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function update($id, array $data)
    {
        try {
            $medication = Medication::findOrFail($id);
            $medication->update($data);
            return $medication;
        } catch (ModelNotFoundException $e) {
            return null;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            return Medication::destroy($id);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
