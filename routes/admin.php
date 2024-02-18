<?php

use App\Http\Controllers\Admin\JobActivityController;
//use App\Http\Controllers\Admin\LiveChatController;
//use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\ReportController;
//use App\Http\Controllers\Admin\CarVoteWinnerController;
//use App\Http\Controllers\Admin\CashVoteWinnerController;
//use App\Http\Controllers\Admin\CashVoteController;
//use App\Http\Controllers\Admin\PhoneVoteWinnerController;
//use App\Http\Controllers\Admin\PhoneVoteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VehicleController;
use Illuminate\Support\Facades\Route;


// Route::get('api/admin/live-chat/datatable', )
Route::group(['middleware' => 'auth:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('file-import-export', [UserController::class, 'fileImportExport'])->name('fileImportExport');
    Route::post('file-import', [UserController::class, 'fileImport'])->name('fileImport');
    Route::get('file-export', [UserController::class, 'fileExport'])->name('fileExport');

    /* dashboard */
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/operators',[DashboardController::class,'operators'])->name('operators');
    Route::get('/mechanics',[DashboardController::class,'mechanics'])->name('mechanics');
    Route::get('/supervisors',[DashboardController::class,'supervisors'])->name('supervisors');
    Route::get('/managers',[DashboardController::class,'managers'])->name('managers');
    Route::get('/vehicles',[DashboardController::class,'vehicles'])->name('vehicles');
    Route::get('/workerAsGLs',[DashboardController::class,'workerAsGLs'])->name('workerAsGLs');
    /* dashboard */

    /* transaction data */
    Route::get('/spare-part-costing',[TransactionController::class,'sparePartCosting'])->name('sparePartCosting');
    Route::post('/spare-costing-import', [TransactionController::class, 'spareCostingImport'])->name('spareCostingImport');
    Route::get('/spare-costing-export', [TransactionController::class, 'spareCostingExport'])->name('spareCostingExport');
    Route::get('/misc-costing',[TransactionController::class,'miscCosting'])->name('miscCosting');
    Route::post('/misc-costing-import', [TransactionController::class, 'miscCostingImport'])->name('miscCostingImport');
    Route::get('/misc-costing-export', [TransactionController::class, 'miscCostingExport'])->name('miscCostingExport');
    Route::get('/work-done-for-claim',[TransactionController::class,'workDoneClaim'])->name('workDoneClaim');
    Route::get('/work-done-driver',[TransactionController::class,'workDoneDriver'])->name('workDoneDriver');
    Route::get('/operator-work-transaction',[TransactionController::class,'operatorWorkTransaction'])->name('operatorWorkTransaction');
    Route::get('/mechanic-work-transaction',[TransactionController::class,'mechanicWorkTransaction'])->name('mechanicWorkTransaction');
    Route::get('/worker-expense-transaction',[TransactionController::class,'workerExpenseTransaction'])->name('workerExpenseTransaction');
    /* transaction data */

    /* master data */
        Route::group(['prefix' => 'master', 'as' => 'master.'], function () {
            Route::resource('user', UserController::class);
            Route::resource('vehicle', VehicleController::class);
            Route::resource('jobActivity', JobActivityController::class);
            Route::resource('supplier', SupplierController::class);
            Route::resource('site', SiteController::class);
            Route::get('/site-detail/{id}',[SiteController::class,'detail'])->name('siteDetail');
            Route::post('/assign-activities-to-site',[SiteController::class,'addSiteActivities'])->name('addSiteActivities');
            Route::post('/save-block',[SiteController::class,'saveBlock'])->name('saveBlock');
            Route::post('/save-task',[SiteController::class,'saveTask'])->name('saveTask');
            Route::post('/update-task',[SiteController::class,'updateTask'])->name('updateTask');
            Route::post('/update-record',[SiteController::class,'updateRecord'])->name('updateRecord');
            Route::get('/delete-task/{id}',[SiteController::class,'delTask'])->name('delTask');
            Route::get('/get-blocks/{id}',[SiteController::class,'getBlocks'])->name('getBlocks');
            Route::get('/delete-block/{id}',[SiteController::class,'delBlock'])->name('delBlock');
            Route::get('/delete-activity-block/{activity_id}/{block_id}/{site_id}',[SiteController::class,'deleteActivityBlock'])->name('deleteActivityBlock');
            Route::get('/sum-blocks-data/{site_id}',[SiteController::class,'sumBlocksData'])->name('sumBlocksData');
            Route::post('/update-block-info-data',[SiteController::class,'updateBlockInfo'])->name('updateBlockInfo');
            Route::post('/assign-block-to-activity',[SiteController::class,'assignBlock'])->name('assignBlock');
            Route::post('/post-site-project',[SiteController::class,'postSiteProject'])->name('postSiteProject');
            Route::post('/post-site-fuel',[SiteController::class,'postSiteFuel'])->name('postSiteFuel');
            Route::post('/post-site-manpower',[SiteController::class,'postSiteManpower'])->name('postSiteManpower');
            Route::post('/post-site-machine',[SiteController::class,'postSiteMachine'])->name('postSiteMachine');
            Route::post('/post-site-activity',[SiteController::class,'postSiteActivity'])->name('postSiteActivity');
//            Route::post('/post-site-block',[SiteController::class,'postSiteBlock'])->name('postSiteBlock');
        });
    /* master data */

    /* reports */
    Route::get('/machinery-list',[ReportController::class,'machineryList'])->name('machineryList');
    Route::get('/summary-diesel',[ReportController::class,'summaryDiesel'])->name('summaryDiesel');
    Route::get('/daily-diesel',[ReportController::class,'dailyDiesel'])->name('dailyDiesel');
    Route::get('/summary-workDone-report',[ReportController::class,'summaryWorkReport'])->name('summaryWorkReport');
    Route::get('/daily-workDone-report',[ReportController::class,'dailyWorkReport'])->name('dailyWorkReport');
    Route::get('/operator-mechanic-output-report',[ReportController::class,'operatorMechanicOutputReport'])->name('operatorMechanicOutputReport');
    Route::get('/table1',[ReportController::class,'table1'])->name('table1');
    Route::get('/table2',[ReportController::class,'table2'])->name('table2');
    Route::get('/monthly-summary-salary',[ReportController::class,'monthlySummarySalary'])->name('monthlySummarySalary');
    Route::get('/worker-payslip',[ReportController::class,'workerPayslip'])->name('workerPayslip');
    Route::get('/salary-pic',[ReportController::class,'salaryPIC'])->name('salaryPIC');
    Route::get('/generated-pic',[ReportController::class,'generatedPIC'])->name('generatedPIC');
    Route::get('/salary-operator',[ReportController::class,'salaryOperator'])->name('salaryOperator');
    Route::get('/salary-mechanic/{?id}',[ReportController::class,'salaryMechanic'])->name('salaryMechanic');
    Route::get('/operator-deduction',[ReportController::class,'operatorDeduction'])->name('operatorDeduction');
    Route::get('/monthly-project-cost',[ReportController::class,'monthlyProjectCost'])->name('monthlyProjectCost');
    Route::get('/work-done',[ReportController::class,'work'])->name('workDone');
    Route::get('/compare-operator-mechanic',[ReportController::class,'compareOperatorMechanic'])->name('compareOperatorMechanic');
    Route::get('/estate-a',[ReportController::class,'estateA'])->name('estateA');
    /* reports */
});
// testing
// require __DIR__.'/auth.php';
require __DIR__.'/auth_admin.php';
