<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller {
    public function summaryWorkReport() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin//pages/report/summaryWorkReport/index',[
            'operators' => $operators
        ]);
    }
    public function dailyWorkReport() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/transaction/dailyWorkTransaction/index',[
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
    public function generatedPIC() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/report/workerPayslip/generated',[
            'operators' => $operators
        ]);
    }
    public function salaryPIC() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/report/salaryPIC/index',[
            'operators' => $operators
        ]);
    }
    public function salaryOperator() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/report/salaryOperator/index',[
            'operators' => $operators
        ]);
    }
    public function salaryMechanic() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/report/salaryMechanic/index',[
            'operators' => $operators
        ]);
    }
    public function operatorDeduction() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/report/operatorDeduction/index',[
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
    public function compareOperatorMechanic() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/report/compareOperatorMechanic/index',[
            'operators' => $operators
        ]);
    }
    public function estateA() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/report/estateA/index',[
            'operators' => $operators
        ]);
    }
}
