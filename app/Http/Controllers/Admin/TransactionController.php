<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SiteExpenseTransactionExport;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Imports\MachineryExpanseTransactionExport;
use App\Imports\MachineryExpenseTransactionImport;
use App\Imports\SiteExpenseTransactionImport;
use App\Imports\UsersImport;
use App\Models\SiteExpenseTransaction;
use App\Models\User;
use App\Models\VehicleExpenseTransaction;
use Database\Factories\MachineryExpenseTransactionFactory;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TransactionController extends Controller
{
    public function dailyWorkTransaction() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/transaction/dailyWorkTransaction/index',[
            'operators' => $operators
        ]);
    }
    public function operatorWorkTransaction() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/transaction/dailyWorkTransaction/operatorWorkTransaction/index',[
            'operators' => $operators
        ]);
    }
    public function mechanicWorkTransaction() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/transaction/dailyWorkTransaction/mechanicWorkTransaction/index',[
            'operators' => $operators
        ]);
    }
    public function workerExpenseTransaction() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/transaction/workerExpenseTransaction/index',[
            'operators' => $operators
        ]);
    }
    public function workDoneClaim() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/transaction/workDoneClaim/index',[
            'operators' => $operators
        ]);
    }
    public function workDoneDriver() {
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/transaction/workDoneClaim/driver',[
            'operators' => $operators
        ]);
    }





    public function sparePartCosting() {
        $vehicle_expense_transactions = VehicleExpenseTransaction::all();
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/transaction/sparePartCosting/index',[
            'operators' => $operators,
            'vehicle_expense_transactions' => $vehicle_expense_transactions
        ]);
    }
    public function spareCostingImport(Request $request)
    {
        Excel::import(new MachineryExpenseTransactionImport(), $request->file('file')->store('temp'));
        return back();
    }
    public function spareCostingExport()
    {
        return Excel::download(new \App\Exports\MachineryExpanseTransactionExport(), 'spare-costing.xlsx');
    }
    public function miscCosting() {
        $site_expense_transactions = SiteExpenseTransaction::all();
        $operators = User::where('role','=','OPERATOR')->get();
        return view('admin/pages/transaction/miscCosting/index',[
            'operators' => $operators,
            'site_expense_transactions' => $site_expense_transactions
        ]);
    }
    public function miscCostingImport(Request $request)
    {
        Excel::import(new SiteExpenseTransactionImport(), $request->file('file')->store('temp'));
        return back();
    }
    public function miscCostingExport()
    {
        return Excel::download(new SiteExpenseTransactionExport(), 'misc-costing.xlsx');
    }
}
