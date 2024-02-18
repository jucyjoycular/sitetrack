<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {

        $suppliers = Supplier::all();
        return view('admin.pages.master.supplier.index', compact('suppliers'));
    }
    public function create()
    {
        return view('admin.pages.master.supplier.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'supplier_code' => 'required',
            'supplier_name' => 'required',
            'phone_number' => 'required',
        ]);

        try {
            $check = Supplier::where('gl_code','=',$request->gl_code)->exists();
            if($check) {
                $mesasge = 'GL Code Was Exists';
                $typ = 'error';
                
            } else {
                $mesasge = 'Data added';
                $typ = 'success';
                Supplier::create([
                    'supplier_code' => $request->supplier_code,
                    'supplier_name' => $request->supplier_name,
                    'phone_number' => $request->phone_number,
                    'address' => $request->address,
                    'gl_code' => $request->gl_code,
                ]);
        
            }
            return redirect()->back()->with($typ,$mesasge);
        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }

        /*Supplier::create([
            'supplier_code' => $request->supplier_code,
            'supplier_name' => $request->supplier_name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'gl_code' => $request->gl_code,
        ]);

        if ($request->close == 'true') {
            return redirect()->back()->with('success','Supplier added');
        }else{
            return redirect(route('admin.master.supplier.index'));
        }*/
    }
    public function destroy(string $id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect()->back()->with('success', 'Supplier deleted successfully');
    }
    public function edit(string $id)
    {
        $data = Supplier::find($id);
        if (!$data) {
            return abort(404);
        }
        return view('admin.pages.master.supplier.edit', compact('data'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'supplier_code' => 'required',
            'supplier_name' => 'required',
            'phone_number' => 'required',
        ]);

        $data = Supplier::findOrFail($id);

        try {
            $check = Supplier::where('gl_code','=',$request->gl_code)->exists();
            if($check) {
                $mesasge = 'GL Code Was Exists';
                
            } else {
                $mesasge = 'Data added';
                $data->update([
                    'supplier_id' => $request->supplier_id,
                    'supplier_name' => $request->supplier_name,
                    'phone_number' => $request->phone_number,
                    'address' => $request->address,
                    'gl_code' => $request->gl_code,
                ]);
        
            }
            return redirect()->back()->with('success',$mesasge);
        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }

        /*$data->update([
            'supplier_id' => $request->supplier_id,
            'supplier_name' => $request->supplier_name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'gl_code' => $request->gl_code,
        ]);

        if ($request->close == 'true') {
            return redirect()->back()->with('success','Data added');
        }else{
            return redirect(route('admin.master.supplier.index'));
        }*/
    }
}
