<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\Medicines;
use App\Models\MedicalRecords;
use App\Models\MedicalRecordsMedicines;
use Illuminate\Support\Facades\DB;

class MedicalRecordController extends Controller
{
    public function render()
    {
        $medical_records = MedicalRecords::latest()->get();
        $patients = Patients::orderBy('name','asc')->get();
        $medicines = Medicines::orderBy('name','asc')->get();
        return view('dashboards.medical_record',['patients'=>$patients,'medicines'=>$medicines, 'medical_records' => $medical_records]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'patient' => 'required','max:255',
            'complaint' => 'required','max:255',
            'medicines' => 'required','array',
            'medicines.*.dose' => 'required','max:255',
            'medicines.*.price' => 'required','max:255',
            'concoction' => 'required','max:255',
            'price_concoction' => 'required','max:255',
            'total' => 'required','max:255',
            'status' => 'required','max:255',
        ]);
        $patients = Patients::find($data['patient']);
        $medic = MedicalRecords::create([
            'id_patient'=> $patients->id,
            'complaint'=> $data['complaint'],
            'concoction_medicine'=> $data['concoction'],
            'price_concoction_medicine'=> $data['concoction'],
            'total_price'=> $data['total'],
            'status'=> $data['status'],
        ]);

        foreach ($data['medicines'] as $medicines) {
            $medical_rm[] = MedicalRecordsMedicines::create([
                'medical_record_id' => $medic->id,
                'medicine_id' => $medicines['medicines'],
                'dose' => $medicines['dose'],
                'price' => $medicines['price'],
            ]);
        }

        return redirect('/rekam-medis')->with('sukses','Data Berhasil Diinput!!!');
    }
}
