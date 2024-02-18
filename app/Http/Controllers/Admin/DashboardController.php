<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/dashboard',[
            'operators' => $operators
        ]);
    }
    public function summaryWorkReport() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin//pages/report/summaryWorkReport/index',[
            'operators' => $operators
        ]);
    }
    public function dailyWorkReport() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin//pages/report/dailyWorkReport/index',[
            'operators' => $operators
        ]);
    }
    public function replantingJob() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/master/replantingJob/index',[
            'operators' => $operators
        ]);
    }
    public function summaryDiesel() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin//pages/report/summaryDiesel/index',[
            'operators' => $operators
        ]);
    }
    public function dailyDiesel() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin//pages/report/dailyDiesel/index',[
            'operators' => $operators
        ]);
    }
    public function siteDetails() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/siteDetails/index',[
            'operators' => $operators
        ]);
    }
    public function operatorMechanicOutputReport() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin//pages/report/operatorMechanicOutputReport/index',[
            'operators' => $operators
        ]);
    }
    public function table1() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin//pages/report/table1/index',[
            'operators' => $operators
        ]);
    }
    public function table2() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin//pages/report/table2/index',[
            'operators' => $operators
        ]);
    }
    public function dailyWorkTransaction() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/transaction/dailyWorkTransaction/index',[
            'operators' => $operators
        ]);
    }
    public function monthlySummarySalary() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/report/monthlySummarySalary/index',[
            'operators' => $operators
        ]);
    }
    public function workerPayslip() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/report/workerPayslip/index',[
            'operators' => $operators
        ]);
    }
    public function monthlyProjectCost() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/report/monthlyProjectCost/index',[
            'operators' => $operators
        ]);
    }
    public function machineryList() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin//pages/report/machineryList/index',[
            'operators' => $operators
        ]);
    }
    public function work() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin//pages/report/workDone/index',[
            'operators' => $operators
        ]);
    }
    public function operators() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/master/manPowerManagement/operators/index',[
            'operators' => $operators
        ]);
    }
    public function mechanics() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/master/manPowerManagement/mechanics/index',[
            'operators' => $operators
        ]);
    }
    public function supervisors() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/master/manPowerManagement/supervisors/index',[
            'operators' => $operators
        ]);
    }
    public function managers() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/master/manPowerManagement/managers/index',[
            'operators' => $operators
        ]);
    }
    public function vehicles() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/vehicle/index',[
            'vehicles' => $operators
        ]);
    }
    public function workerAsGLs() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/workerAsGL/index',[
            'workerAsGLs' => $operators
        ]);
    }
}
