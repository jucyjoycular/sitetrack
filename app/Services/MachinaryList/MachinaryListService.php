<?php

namespace App\Services\MachinaryList;



use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class MachinaryListService {
    public function baseQuery($request = null) {
        $query =DB::table('project_workers')
            ->leftJoin('users', 'project_workers.user_id', '=', 'users.id')
            ->leftJoin('vehicles', 'project_workers.vehicle_id', '=', 'vehicles.id')
            ->leftJoin('projects', 'project_workers.project_id', '=', 'projects.id')
            ->select('project_workers.id', 'users.name as user_name','vehicles.name as vehicle_name','vehicles.machine_id','projects.name as project_name');

        return $query;
    }

    public function dataTableProjectWorkers($request = null) {
        $query = $this->baseQuery($request);

        return DataTables::of($this->baseQuery())
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = "<button class='btn btn-danger ml-2' onclick=\"handleDeleteRows('$row->id')\">Delete</button>";
                return $btn;
            })
            ->make(true);
    }


}
