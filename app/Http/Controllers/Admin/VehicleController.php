<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index() {

        $vehicles = Vehicle::all();
        return view('admin.pages.master.vehicle.index', compact('vehicles'));
    }
    public function create()
    {
        return view('admin.pages.master.vehicle.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required|unique:vehicles',
        ]);

        try {
            $check = Vehicle::where('gl_code','=',$request->gl_code)->exists();
            if($check) {
                $mesasge = 'GL Code Was Exists';
                $typ = 'error';
                
            } else {
                $mesasge = 'Data added';
                $typ = 'success';
                Vehicle::create([
                    'name' => $request->name,
                    'vehicle_id' => $request->vehicle_id,
                    'model' => $request->model,
                    'type' => $request->type,
                    'fuel_type' => $request->fuel_type,
                    'fuel_capacity' => $request->fuel_capacity,
                    'gl_code' => $request->gl_code,
                ]);
        
            }
            return redirect()->back()->with($typ,$mesasge);
        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }


        /*Vehicle::create([
            'name' => $request->name,
            'vehicle_id' => $request->vehicle_id,
            'model' => $request->model,
            'type' => $request->type,
            'fuel_type' => $request->fuel_type,
            'fuel_capacity' => $request->fuel_capacity,
            'gl_code' => $request->gl_code,
        ]);

        if ($request->close == 'true') {
            return redirect()->back()->with('success','Data added');
        }else{
            return redirect(route('admin.master.vehicle.index'));
        }*/
    }
    public function destroy(string $id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect()->back()->with('success', 'Vehicle deleted successfully');
    }
    public function edit(string $id)
    {
        $data = Vehicle::find($id);
        if (!$data) {
            return abort(404);
        }
        return view('admin.pages.master.vehicle.edit', compact('data'));
    }
    public function update(Request $request, string $id)
    {   
        try {

            
            $request->validate([
                'vehicle_id' => 'required',
            ]);

            $data = Vehicle::findOrFail($id);
            $vehicle = Vehicle::where('id','=',$id)->first();

            $check = Vehicle::where('gl_code','=',$request->gl_code)->exists();
            if($vehicle->gl_code==$request->gl_code) {

                $mesasge = 'Data added';
                $typ = 'success';
                $data->update([
                    'name' => $request->name,
                    'vehicle_id' => $request->vehicle_id,
                    'model' => $request->model,
                    'type' => $request->type,
                    'fuel_type' => $request->fuel_type,
                    'fuel_capacity' => $request->fuel_capacity,
                    'gl_code' => $request->gl_code,
                    ]);

            }
            else if($check) {
                $mesasge = 'GL Code Was Exists';
                $typ = 'error';
                
            } else {
                $mesasge = 'Data added';
                $typ = 'success';
                $data->update([
                'name' => $request->name,
                'vehicle_id' => $request->vehicle_id,
                'model' => $request->model,
                'type' => $request->type,
                'fuel_type' => $request->fuel_type,
                'fuel_capacity' => $request->fuel_capacity,
                'gl_code' => $request->gl_code,
                ]);
        
            }
            return redirect()->back()->with($typ,$mesasge);
        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }

        
        /*
        try {

            $request->validate([
                'vehicle_id' => 'required',
            ]);

            $data = Vehicle::findOrFail($id);

            $data->update([
                'name' => $request->name,
                'vehicle_id' => $request->vehicle_id,
                'model' => $request->model,
                'type' => $request->type,
                'fuel_type' => $request->fuel_type,
                'fuel_capacity' => $request->fuel_capacity,
                'gl_code' => $request->gl_code,
            ]);

        } catch (\Exception $e) {

            return $e->getMessage();
        }

        if ($request->close == 'true') {
            return redirect()->back()->with('success','Data added');
        }else{
            return redirect(route('admin.master.vehicle.index'));
        }*/
    }
}
