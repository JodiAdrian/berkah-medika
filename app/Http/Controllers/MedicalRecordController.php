<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\Medicines;

class MedicalRecordController extends Controller
{
    public function render()
    {
        $patients = Patients::orderBy('name','asc')->get();
        $medicines = Medicines::orderBy('name','asc')->get();
        return view('dashboards.medical_record',['patients'=>$patients,'medicines'=>$medicines]);
    }
}
