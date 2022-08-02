<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicines;

class MedicineController extends Controller
{
    public function render()
    {
        $medicine = Medicines::all();
        return view('dashboards.medicine',['medicine' => $medicine]);
    }
    public function store(Request $request)
    {
        $rules = 

        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'unit' => 'required',
            'price' => 'required',
        ],
        [
            'name.required' => 'Nama obat dibutuhkan',
            'type.required' => 'Jenis Obat dibutuhkan',
            'unit.required' => 'Satuan Obat dibutuhkan',
            'price.required' => 'Harga dibutuhkan',
        ]
    );

        $medicine = new Medicines();
        $medicine->name = $request->name;
        $medicine->type = $request->type;
        $medicine->unit = $request->unit;
        $medicine->price = $request->price;
        $medicine->save();

        return redirect( route('medicine') )->with('success', 'Obat telah ditambahkan !');
    }

    public function delete($id){
        $medicine = Medicines::find($id);
        $medicine -> delete();
        return redirect('/obat');
    }
}
