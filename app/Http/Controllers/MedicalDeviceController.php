<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\medical_device;

class MedicalDeviceController extends Controller
{

    public function render()
    {
        $device = medical_device::all();
        return view ('dashboards.medical_device', ['device' => $device]);
    }

    public function store(Request $request)
    {
        
        $rules = 

        $this->validate($request, [
            'device_name' => 'required',
            'unit' => 'required',
            'price' => 'required',
        ],
        [
            'device_name.required' => 'Nama obat dibutuhkan',
            'unite.required' => 'Dosis dibutuhkan',
            'price.required' => 'Harga dibutuhkan',
        ]
    );

        $device = new medical_device();
        $device->device_name = $request->device_name;
        $device->unit = $request->unit;
        $device->price = $request->price;
        $device->save();

        return redirect( route('device') )->with('success', 'Alat telah ditambahkan !');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'id' => 'required',
            'device_name' => 'required',
            'unit' => 'required',
            'price' => 'required',
        ]);
        $device = medical_device::findOrFail($data['id']);
        $device->update([
            'device_name' => $data['device_name'],
            'unit' => $data['unit'],
            'price' => $data['price'],
        ]);
        return back()->with('success', 'Alat telah diupdate !');
    }

    public function delete($id)
    {
        $device = medical_device::find($id);
        $device -> delete();
        return redirect('/alat_kesehatan');
    }
}
