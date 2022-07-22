<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;

class DashboardController extends Controller
{
    public function render()
    {
        $patient = Patients::all();
        return view ('dashboards.patient', ['patient' => $patient]);
    }

    public function store(Request $request)
    {
        $rules = 

        $this->validate($request, [
            'identity_number' => 'required|min:16',
            'name' => 'required',
            'born' => 'required',
            'birthdate' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ],
        [
            'identity_number.required' => 'NIK dibutuhkan',
            'identity_number.min' => 'NIK minimal 16 angka',
            'name.required' => 'Nama lengkap dibutuhkan',
            'born.required' => 'Tempat lahir dibutuhkan',
            'birthdate.required' => 'Tanggal lahir dibutuhkan',
            'height.required' => 'Tinggi badan dibutuhkan',
            'weight.required' => 'Berat badan dibutuhkan',
            'contact.required' => 'Kontak dibutuhkan',
            'address.required' => 'Alamat dibutuhkan',
        ]
    );

        $patient = new Patients();
        $patient->identity_number = $request->identity_number;
        $patient->name = $request->name;
        $patient->born = $request->born;
        $patient->birthdate = $request->birthdate;
        $patient->height = $request->height;
        $patient->weight = $request->weight;
        $patient->contact = $request->contact;
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
            'identity_number' => 'required|min:16',
            'id' => ['required', 'numeric'],
            'name' => 'required',
            'born' => 'required',
            'birthdate' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ]);
        $patient = Patients::findOrFail($data['id']);
        $patient->update([
            'identity_number' => $data['identity_number'],
            'name' => $data['name'],
            'born' => $data['born'],
            'birthdate' => $data['birthdate'],
            'height' => $data['height'],
            'weight' => $data['weight'],
            'contact' => $data['contact'],
            'address' => $data['address'],
        ]);
        return back()->with('success', 'Pasien telah diupdate !');
    }
}
