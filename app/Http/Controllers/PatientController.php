<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\Clinics;

class PatientController extends Controller
{
    public function showPatient($id)
    {
        $clinics = Clinics::where('clinic_id', $id)->get();
        $patients = Patients::where('clinic_id', $id)->get();

        return response()->json([$clinics, $patients]);
    }
}
