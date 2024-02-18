<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\TicketCarDataTable;
use App\Models\Project;
use App\Models\TicketCar;
use Storage;

class TicketCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TicketCarDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.ticket.car.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Project::find($id);

        if (!$data) {
            return abort(404);
        }

        return view('admin.pages.ticket.car.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'price' => 'required',
            'qty' => 'required',
            'draw_date' => 'required',
            'draw_time' => 'required',
        ]);

        TicketCar::updateOrCreate(
            [
                'car_vote_id' => $id,
            ],
            [
                'price' => $request->price,
                'qty' => $request->qty,
                'draw_date' => $request->draw_date,
                'draw_time' => $request->draw_time,
            ]
        );

        if ($request->close == 'true') {
            return redirect()->back()->with('success','Data updated');
        }else{
            return redirect(route('admin.ticket.car.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
