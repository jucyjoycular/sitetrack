<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobActivity;
use App\Models\Site;
use App\Models\SiteActivity;
use App\Models\SiteActivityBlocks;
use App\Models\SiteBlock;
use App\Models\SiteFuel;
use App\Models\SiteInfoBlock;
use App\Models\SiteInfoBlockInfo;
use App\Models\SiteInfoBlockTask;
use App\Models\SiteMachine;
use App\Models\SiteManpower;
use App\Models\SiteProject;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function addSiteActivities(Request $request) {
        foreach ($request->site_activities as $activity) {

                $check = SiteActivity::where('job_activity_id','=',$activity)->where('site_id','=',$request->site_id)->exists();
                if($check) {

                $message = 'Cannot duplicate activities';

                    
                } else {
                    
                    $message = 'activities added successfully';

                    SiteActivity::create([
                        'site_id' => $request->site_id,
                        'job_activity_id' => $activity,
                    ]);
                    
                    
                }
          

           
        }
        return back()->with('success',$message);
    }
    public function updateBlockInfo(Request $request) {
        try {
            DB::beginTransaction();
            $check = SiteInfoBlockInfo::where('site_id','=',$request->site_id)->where('activity_block_id','=',$request->activity_block_id)->where('block_id','=',$request->block_id)->first();
            if($check) {
                $check->update([
                    'estimate_qty' => isset($request->estimate_qty) ? $request->estimate_qty : "",
                    'worker_rate_rm' => isset($request->worker_rate_rm) ? $request->worker_rate_rm : "",
                    'contract_rate_rm' => isset($request->contract_rate_rm) ? $request->contract_rate_rm : "",
                ]);
            } else {
                SiteInfoBlockInfo::create([
                    'site_id' => $request->site_id,
                    'activity_block_id' => $request->activity_block_id,
                    'block_id' => $request->block_id,
                    'estimate_qty' => isset($request->estimate_qty) ? $request->estimate_qty : "",
                    'worker_rate_rm' => isset($request->worker_rate_rm) ? $request->worker_rate_rm : "",
                    'contract_rate_rm' => isset($request->contract_rate_rm) ? $request->contract_rate_rm : "",
                ]);
            }
            DB::commit();
            return collect([
                'status' => true,
                'message' => "site block activity info updated successfully!"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return collect([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function deleteActivityBlock($a_id , $b_id , $site_id) {
        try {
            $activityBlock = SiteActivityBlocks::where('site_activity_id','=',$a_id)->where('block_id','=',$b_id)->where('site_id','=',$site_id)->first();
            SiteInfoBlockInfo::where('activity_block_id','=',$activityBlock->id)->delete();
            $activityBlock->delete();
            return collect([
                'status' => true,
                'message' => "site related block delete successfully!"
            ]);
        } catch (\Exception $e) {
            return collect([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function assignBlock(Request $request) {
        try {
            DB::beginTransaction();
            $blocks = json_decode($request->blocks);
            foreach ($blocks as $block) {
                SiteActivityBlocks::create([
                   'block_id' => $block,
                   'site_activity_id' => $request->activity_id,
                   'site_id' => $request->site_id
                ]);
            }
            DB::commit();
            return collect([
                'status' => true,
                'message' => 'blocks assign to activity successfully!'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return collect([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function delTask($id) {
        SiteInfoBlockTask::where('id','=',$id)->delete();
        return collect([
            'status' => true,
            'message' => 'task deleted successfully!'
        ]);
    }
    public function updateRecord(Request $request) {
        try {
            $check = SiteActivity::where('job_activity_id','=',$request->activity_id)->first();
            if($check) {
                SiteActivity::where('job_activity_id','=',$request->activity_id)->update([
                    'site_id' => $request->site_id,
                    'estimate_quantity' => $request->estimate_quantity,
                    'worker_rate' => $request->worker_rate,
                    'contract_rate' => $request->contract_rate,
                    'job_activity_id' => $request->activity_id,
                ]);
            } else {
                SiteActivity::create([
                    'site_id' => $request->site_id,
                    'estimate_quantity' => $request->estimate_quantity,
                    'worker_rate' => $request->worker_rate,
                    'contract_rate' => $request->contract_rate,
                    'job_activity_id' => $request->activity_id,
                ]);
            }
            return collect([
                'status' => true,
                'message' => 'activity updated successfully!'
            ]);
        } catch (\Exception $e) {
            return collect([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function updateTask(Request $request) {
        SiteInfoBlockTask::where('id','=',$request->id)->update([
            'task_name' => $request->task_name
        ]);
        return collect([
            'status' => true,
            'message' => 'task updated successfully!'
        ]);
    }
    public function delBlock($id) {
        SiteInfoBlock::where('id','=',$id)->delete();
        SiteInfoBlockTask::where('block_id','=',$id)->delete();
        return collect([
            'status' => true,
            'message' => 'block deleted successfully!'
        ]);
    }
    public function saveTask(Request $request) {
        $check = SiteInfoBlockTask::where('block_id','=',$request->block_id)->where('task_name','=',$request->task_name)->exists();
        if($check) {
            return collect([
                'status' => false,
                'message' => 'task already exist!'
            ]);
        }
        SiteInfoBlockTask::create([
            'block_id' => $request->block_id,
            'task_name' => $request->task_name
        ]);
        return collect([
            'status' => true,
            'message' => 'task added successfully!'
        ]);
    }
    public function assignBlockToActivityWhileAddingBlocks($block , $site_id) {
        $site_activities = SiteActivity::where('site_id','=',$site_id)->get();
        foreach ($site_activities as $activity) {
            SiteActivityBlocks::create([
                'block_id' => $block->id,
                'site_id' => $site_id,
                'site_activity_id' => $activity->id
            ]);
        }
        return collect([
            'status' => true,
            'message' => 'blocks assign to activity successfully!'
        ]);
    }
    public function saveBlock(Request $request) {
        try {
            $check = SiteInfoBlock::where('site_id','=',$request->site_id)->where('block_name','=',$request->block_name)->exists();
            if($check) {
                return collect([
                    'status' => false,
                    'message' => 'block already exist for this site!'
                ]);
            }
            DB::beginTransaction();
            $data = SiteInfoBlock::create([
                'site_id' => $request->site_id,
                'block_name' => $request->block_name
            ]);
            $check = $this->assignBlockToActivityWhileAddingBlocks($data , $request->site_id);
            if($check['status']) {
                DB::commit();
                return collect([
                    'status' => true,
                    'message' => 'block added successfully!'
                ]);
            } else {
                DB::rollBack();
                return collect([
                    'status' => false,
                    'message' => 'while assigning block to activity error occur!'
                ]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return collect([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function getBlocks($id) {
        $data = SiteInfoBlock::where('site_id','=',$id)->with('tasks')->get();
        return collect([
           'status' => true,
           'data' => $data,
           'message' => 'block fetch successfully!'
        ]);
    }
    public function index()
    {
        $sites = Site::all();
        return view('admin.pages.master.site.index', compact('sites'));
    }
    public function create()
    {
        return view('admin.pages.master.site.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'site_id' => 'required',
            'site_name' => 'required',
        ]);

        

        try {
            $check = Site::where('project_gl_code','=',$request->project_gl_code)->exists();
            if($check) {
                $mesasge = 'Project Code Was Exists';
                $typ = 'error';
                
            } else {
                $mesasge = 'Data added';
                $typ = 'success';
                Site::create([
                    'site_id' => $request->site_id,
                    'site_name' => $request->site_name,
                    'location' => $request->location,
                    'project_start' => $request->project_start,
                    'project_completed' => $request->project_completed,
                    'project_gl_code' => $request->project_gl_code,
                    'project_due_date' => $request->project_due_date,
                ]);
        
            }
            return redirect()->back()->with($typ,$mesasge);
        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }

       

        /*if ($request->close == 'true') {
            return redirect()->back()->with('success','Data added');
        }else{
            return redirect(route('admin.master.site.index'));
        }*/

    }
    public function destroy(string $id)
    {
        $site = Site::find($id);
        $site->delete();
        return redirect()->back()->with('success', 'Site deleted successfully');
    }
    public function edit(string $id)
    {
        $data = Site::find($id);
        if (!$data) {
            return abort(404);
        }
        return view('admin.pages.master.site.edit', compact('data'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'site_id' => 'required',
            'site_name' => 'required',
        ]);

        $data = Site::findOrFail($id);
        $site = Site::where('id','=',$id)->first();

        try {
            $check = Site::where('project_gl_code','=',$request->project_gl_code)->exists();
            if($site->project_gl_code==$request->project_gl_code) {
                $mesasge = 'Data added';
                $typ = 'error';
                $data->update([
                    'site_id' => $request->site_id,
                    'site_name' => $request->site_name,
                    'location' => $request->location,
                    'project_start' => $request->project_start,
                    'project_completed' => $request->project_completed,
                    'project_gl_code' => $request->project_gl_code,
                    'project_due_date' => $request->project_due_date,
                ]);
        
            } else if($check){
                    $mesasge = 'Project Code Was Exists';
                    $typ = 'error';
                    
             
            } else {
                $mesasge = 'Data added';
                $typ = 'success';
                $data->update([
                    'site_id' => $request->site_id,
                    'site_name' => $request->site_name,
                    'location' => $request->location,
                    'project_start' => $request->project_start,
                    'project_completed' => $request->project_completed,
                    'project_gl_code' => $request->project_gl_code,
                    'project_due_date' => $request->project_due_date,
                ]);

            }
            return redirect()->back()->with($typ,$mesasge);
        } catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }


       /* $data->update([
            'site_id' => $request->site_id,
            'site_name' => $request->site_name,
            'location' => $request->location,
            'project_start' => $request->project_start,
            'project_completed' => $request->project_completed,
            'project_gl_code' => $request->project_gl_code,
            'project_due_date' => $request->project_due_date,
        ]);

        if ($request->close == 'true') {
            return redirect()->back()->with('success','Data added');
        }else{
            return redirect(route('admin.master.site.index'));
        }*/
    }
    public function sumBlocksData($id) {
        try {
            $site_activities = SiteActivity::where('site_id','=',$id)->with('jobActivity','activityBlocks.block','activityBlocks.blockInfo')->get();
            $estimatedQty = [];
            $workerRate = [];
            $contractorRate = [];
            foreach ($site_activities as $activity) {
                foreach ($activity->activityBlocks as $blocksInfo) {
                    if($blocksInfo->blockInfo) {
                        array_push($estimatedQty, $blocksInfo->blockInfo->estimate_qty);
                        array_push($workerRate, $blocksInfo->blockInfo->worker_rate_rm);
                        array_push($contractorRate, $blocksInfo->blockInfo->contract_rate_rm);
                    }
                }
            }
            $estimated_qty = array_sum($estimatedQty);
            $worker_rate = array_sum($workerRate);
            $contract_rate = array_sum($contractorRate);
            return collect([
                'status' => true,
                'estimated_qty' => $estimated_qty,
                'worker_rate' => $worker_rate,
                'contract_rate' => $contract_rate
            ]);
        } catch (\Exception $e) {
            return collect([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    public function detail($id)
    {
        $users = User::all();
        $vehicles = Vehicle::all();
        $activities = JobActivity::all();
        $site_activities = SiteActivity::where('site_id','=',$id)->with('jobActivity','activityBlocks.block','activityBlocks.blockInfo')->get();
        $estimatedQty = [];
        $workerRate = [];
        $contractorRate = [];
        foreach ($site_activities as $activity) {
            foreach ($activity->activityBlocks as $blocksInfo) {
                if($blocksInfo->blockInfo) {
                    array_push($estimatedQty, $blocksInfo->blockInfo->estimate_qty);
                    array_push($workerRate, $blocksInfo->blockInfo->worker_rate_rm);
                    array_push($contractorRate, $blocksInfo->blockInfo->contract_rate_rm);
                }
            }
        }
        $estimated_qty = array_sum($estimatedQty);
        $worker_rate = array_sum($workerRate);
        $contract_rate = array_sum($contractorRate);
        $site = Site::where('id','=',$id)->first();
        $fuel = SiteFuel::where('site_id','=',$id)->first();
        $blocks = SiteInfoBlock::where('site_id',$id)->get();
        $manpower = SiteManpower::where('site_id','=',$id)->first();
        $machineToSite = SiteMachine::where('site_id','=',$id)->first();
        $passID = SiteActivity::where('site_id','=',$id)->first();
        return view('admin.pages.master.site.detail', [
            'id' => $id,
            'users' => $users,
            'estimated_qty' => $estimated_qty,
            'worker_rate' => $worker_rate,
            'contract_rate' => $contract_rate,
            'vehicles' => $vehicles,
            'site' => $site,
            'fuel' => $fuel,
            'blocks' => $blocks,
            'manpower' => $manpower,
            'machineToSite' => $machineToSite,
            'activities' => $activities,
            'site_activities' => $site_activities,
            'passID' => $passID,
        ]);
    }
    public function postSiteProject(Request $request) {
        try {
            $check = Site::where('id','=',$request->id)->exists();
            if($check) {
                $mesasge = 'site info updated';
                Site::where('id','=',$request->id)->update([
                    'site_name' => $request->site_name,
                    'location' => $request->location
                ]);

                
            } else {
               
            }
            return back()->with('success',$mesasge);
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage());
        }
    }
    public function postSiteFuel(Request $request) {
        try {
            $check = SiteFuel::where('site_id','=',$request->site_id)->exists();
            if($check) {
                $mesasge = 'site info updated';
                SiteFuel::where('site_id','=',$request->site_id)->update([
                    'site_id' => $request->site_id,
                    'diesel_qty' => $request->diesel_qty,
                ]);
            } else {
                $mesasge = 'site info added';
                SiteFuel::create([
                    'site_id' => $request->site_id,
                    'diesel_qty' => $request->diesel_qty,
                ]);
            }
            return back()->with('success',$mesasge);
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage());
        }
    }
    public function postSiteManpower(Request $request) {
        try {
            $check = SiteManpower::where('site_id','=',$request->site_id)->exists();
            if($check) {
                $mesasge = 'site info updated';
                SiteManpower::where('site_id','=',$request->site_id)->update([
                    'site_id' => $request->site_id,
                    'manager' => $request->manager,
                    'supervisor' => $request->supervisor,
                    'operator' => json_encode($request->operator),
                    'mechanic' => $request->mechanic,
                ]);
            } else {
                $mesasge = 'site info added';
                SiteManpower::create([
                    'site_id' => $request->site_id,
                    'manager' => $request->manager,
                    'supervisor' => $request->supervisor,
                    'operator' => json_encode($request->operator),
                    'mechanic' => $request->mechanic,
                ]);
            }
            return back()->with('success',$mesasge);
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage());
        }
    }
    public function postSiteMachine(Request $request) {
        try {
            $check = SiteMachine::where('site_id','=',$request->site_id)->exists();
            if($check) {
                $mesasge = 'site info updated';
                SiteMachine::where('site_id','=',$request->site_id)->update([
                    'site_id' => $request->site_id,
                    'machine' => json_encode($request->machine),
                    'machine_id' => json_encode($request->machine_id),
                ]);
            } else {
                $mesasge = 'site info added';
                SiteMachine::create([
                    'site_id' => $request->site_id,
                    'machine' => json_encode($request->machine),
                    'machine_id' => json_encode($request->machine_id),
                ]);
            }
            return back()->with('success',$mesasge);
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage());
        }
    }
    public function postSiteActivity(Request $request) {
        try {
            $check = SiteActivity::where('site_id','=',$request->site_id)->exists();
            if($check) {
                $mesasge = 'site info updated';
                SiteActivity::where('site_id','=',$request->site_id)->update([
                    'site_id' => $request->site_id,
                    'status' => $request->status,
                    'work_activity' => $request->work_activity,
                    'uom' => $request->uom,
                    'estimate_quantity' => $request->estimate_quantity,
                    'worker_rate' => $request->worker_rate,
                    'contract_rate' => $request->contract_rate,
                ]);
            } else {
                $mesasge = 'site info added';
                SiteActivity::create([
                    'site_id' => $request->site_id,
                    'status' => $request->status,
                    'work_activity' => $request->work_activity,
                    'uom' => $request->uom,
                    'estimate_quantity' => $request->estimate_quantity,
                    'worker_rate' => $request->worker_rate,
                    'contract_rate' => $request->contract_rate,
                ]);
            }
            return back()->with('success',$mesasge);
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage());
        }
    }
    public function postSiteBlock(Request $request) {
        try {
            $check = SiteBlock::where('site_id','=',$request->site_id)->exists();
            if($check) {
                $mesasge = 'site info updated';
                SiteBlock::where('site_id','=',$request->site_id)->update([
                    'site_id' => $request->site_id,
                    'trello_id' => $request->trello_id,
                    'trello_title' => $request->trello_title,
                    'trello_task' => $request->trello_task,
                ]);
            } else {
                $mesasge = 'site info added';
                SiteBlock::create([
                    'site_id' => $request->site_id,
                    'trello_id' => $request->trello_id,
                    'trello_title' => $request->trello_title,
                    'trello_task' => $request->trello_task,
                ]);
            }
            return back()->with('success',$mesasge);
        } catch (\Exception $e) {
            return back()->with('error',$e->getMessage());
        }
    }
}
