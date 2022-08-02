<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;

class DashboardController extends Controller
{
    public function render()
    {
        // nama, jenis kelamin, tgl lahir, no.handphone, nama suami, alamat
        $patient = Patients::all();
        return view ('dashboards.patient', ['patient' => $patient]);
    }

    public function store(Request $request)
    {
        $rules = 

        $this->validate($request, [
                'name' => 'required',
                'gender' => 'required',
                'birthdate' => 'required',
                'phone' => 'required',
                'address' => 'required',
            ],
            [
                'name.required' => 'Nama lengkap dibutuhkan',
                'gender.required' => 'Jenis Kelamin dibutuhkan',
                'birthdate.required' => 'Tanggal lahir dibutuhkan',
                'phone.required' => 'Nomor HP dibutuhkan',
                'address.required' => 'Alamat dibutuhkan',
            ]
        );

        $patient = new Patients();
        $patient->name = $request->name;
        $patient->gender = $request->gender;
        $patient->birthdate = $request->birthdate;
        $patient->phone = $request->phone;
        $patient->nama_suami = $request->nama_suami;
        $patient->address = $request->address;
        $patient->save();

        return redirect( route('patient') )->with('success', 'Pasien telah ditambahkan !');;
    }

    public function delete($id){
        $patient = Patients::find($id);
        $patient -> delete();
        return redirect('/pasien');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'phone' => 'required',
            'nama_suami' => 'nullable',
            'address' => 'required',
        ]);
        $patient = Patients::findOrFail($data['id']);
        $patient->update([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'birthdate' => $data['birthdate'],
            'phone' => $data['phone'],
            'nama_suami' => $data['nama_suami'],
            'address' => $data['address'],
        ]);
        return back()->with('success', 'Pasien telah diupdate !');
    }
}
