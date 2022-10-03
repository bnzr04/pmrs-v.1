<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinics;
use App\Models\Patients;

class ClinicController extends Controller
{
    public function index(Request $request)
    {
        dd($request);
        return view('sidebar-component.addClinic');
    }

    public function show()
    {
        $data = Clinics::all();

        return view('dashboard', ['clinics' => $data]);
    }

    public function showClinic($id)
    {
        $data = Clinics::where('clinic_id', $id)->get();
        $data2 = Patients::where('clinic_id', $id)->get();

        return response()->json([$data, $data2]);
    }
}
