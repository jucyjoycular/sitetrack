<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobActivity;
use Illuminate\Http\Request;

class JobActivityController extends Controller
{
    public function index() {

        $job_activities = JobActivity::all();
        return view('admin.pages.master.jobActivity.index', compact('job_activities'));
    }
    public function create()
    {
        return view('admin.pages.master.jobActivity.create');
    }
    public function store(Request $request)
    {
        JobActivity::create([
            'work_description' => $request->work_description,
            'uom' => $request->uom,
        ]);

        if ($request->close == 'true') {
            return redirect()->back()->with('success','Job Activity added');
        }else{
            return redirect(route('admin.master.jobActivity.index'));
        }
    }
    public function destroy(string $id)
    {
        $job_activities = JobActivity::find($id);
        $job_activities->delete();
        return redirect()->back()->with('success', 'Job Activity deleted successfully');
    }
    public function edit(string $id)
    {
        $data = JobActivity::find($id);
        if (!$data) {
            return abort(404);
        }
        return view('admin.pages.master.jobActivity.edit', compact('data'));
    }
    public function update(Request $request, string $id)
    {
        $data = JobActivity::findOrFail($id);

        $data->update([
            'work_description' => $request->work_description,
            'uom' => $request->uom,
        ]);

        if ($request->close == 'true') {
            return redirect()->back()->with('success','Data added');
        }else{
            return redirect(route('admin.master.jobActivity.index'));
        }
    }
}
