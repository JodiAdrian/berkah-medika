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
            'dose' => 'required',
            'price' => 'required',
        ],
        [
            'name.required' => 'Nama obat dibutuhkan',
            'dose.required' => 'Dosis dibutuhkan',
            'price.required' => 'Harga dibutuhkan',
        ]
    );

        $medicine = new Medicines();
        $medicine->name = $request->name;
        $medicine->dose = $request->dose;
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
