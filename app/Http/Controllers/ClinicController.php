<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinics;

class ClinicController extends Controller
{
    public function index()
    {
        return view('sidebar-component.addClinic');
    }

    public function show()
    {
        $data = Clinics::all();

        return view('dashboard', ['clinics' => $data]);
    }
}
