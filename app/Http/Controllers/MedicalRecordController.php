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

    public function store(Request $request)
    {
        $data = $request->validate([
            'supplier' => ['required','max:255'],
            'items'=> ['required','array'],
            'items.*.item'=> ['required','numeric', 'exists:items,id_item'],
            'items.*.qty'=> ['required','integer', 'min:1'],
            'description'=> ['nullable','string'],
        ]);

        $supplier = Supplier::find($data['supplier']);

        $order = Order::create([
            'id_supplier' => $supplier->id_supplier,
            'address' => $supplier->address,
            'status' => 'Pending',
            'description' => $data['description'],
        ]);

        foreach ($data['items'] as $items) {
            $item_order[] = Item_Order::create([
                'id_order' => $order->id_order,
                'id_item' => $items['item'],
                'quantity' => $items['qty'],
            ]);
        }

        return redirect('order')->with('sukses','Data Berhasil Diinput!!!');
    }
}
