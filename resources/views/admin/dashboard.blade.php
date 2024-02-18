@extends('admin.layout.app')

@push('styles')
    <style>
        .order-card i {
            color: #fff;
        }
        .order-card {
            color: #fff;
        }

        .bg-c-blue {
            background: linear-gradient(45deg,#4099ff,#73b4ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg,#2ed8b6,#59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg,#FFB64D,#ffcb80);
        }

        .bg-c-pink {
            background: linear-gradient(45deg,#FF5370,#ff869a);
        }


        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .card .card-block {
            padding: 25px;
        }

        .order-card i {
            font-size: 26px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Dashboard</h1>
            <ul>
                <li><a href="">Main</a></li>
                <li>Main</li>
            </ul>
        </div>

        <div class="separator-breadcrumb border-top">
            <div class="container-fluid mt-4">
                <div class="row">

                    <div class="col-md-4 col-xl-12">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block" style="cursor:pointer;" onclick="window.location.href='/admin/estate-a'">
                                <h1 class="m-b-20 mb-4" style="color:#fff;">Estate A</h1>
                                <div class="d-flex flex-row justify-content-between" style="text-align: justify;">
                                    <h4 class="m-b-0" style="color:#fff;">Activity</h4>
                                    <h4 class="m-b-0" style="color:#fff;">Est. Qty</h4>
                                    <h4 class="m-b-0" style="color:#fff;">Unit Qty</h4>
                                    <h4 class="m-b-0" style="color:#fff;">Payment</h4>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="m-b-0" style="color:#fff;">Activity 1</h4>
                                    <h4 class="m-b-0" style="color:#fff;">80</h4>
                                    <h4 class="m-b-0" style="color:#fff;">100</h4>
                                    <h4 class="m-b-0" style="color:#fff;">Payment</h4>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="m-b-0" style="color:#fff;">Activity 2</h4>
                                    <h4 class="m-b-0" style="color:#fff;">80</h4>
                                    <h4 class="m-b-0" style="color:#fff;">100</h4>
                                    <h4 class="m-b-0" style="color:#fff;">Payment</h4>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="m-b-0" style="color:#fff;">Activity 3</h4>
                                    <h4 class="m-b-0" style="color:#fff;">50</h4>
                                    <h4 class="m-b-0" style="color:#fff;">100</h4>
                                    <h4 class="m-b-0" style="color:#fff;">Payment</h4>
                                </div>
                                <br/>
                                <br/>
                                <h2 class="m-b-0" style="color:#fff;">Diesel Usage : 3000</h2>
                                <h2 class="m-b-0" style="color:#fff;">Diesel balance : 2000</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block" style="cursor:pointer;" onclick="window.location.href='/admin/operators'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">OPERATORS</h6>
                                <h2 class="text-right"><i class="fa fa-users"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">Total Operators<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block" style="background:#A39E9F;cursor:pointer;" onclick="window.location.href='/admin/mechanics'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">MECHANICS</h6>
                                <h2 class="text-right"><i class="fa fa-users"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">Total Mechanics<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block" style="background:#93C135;cursor:pointer;" onclick="window.location.href='/admin/supervisors'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">SUPERVISOR</h6>
                                <h2 class="text-right"><i class="fa fa-users"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">Total Supervisor<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block" style="background:#c0c0c0;cursor:pointer;" onclick="window.location.href='/admin/vehicles'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">Vehicle</h6>
                                <h2 class="text-right"><i class="fa fa-car" aria-hidden="true"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">Total Vehicle<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block" style="background:purple;cursor:pointer;" onclick="window.location.href='/admin/workerAsGLs'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">Worker</h6>
                                <h2 class="text-right"><i class="fa fa-users"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">Worker As GL<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-red order-card">
                            <div class="card-block" style="background:#355dc1;cursor:pointer;" onclick="window.location.href='/admin/spare-part-costing'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">Vehicle & Miscellaneous</h6>
                                <h2 class="text-right"><i class="fa fa-money" aria-hidden="true"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">Vehicle Expense<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-red order-card">
                            <div class="card-block" style="background:#3c74ff;cursor:pointer;" onclick="window.location.href='/admin/work-done-for-claim'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">WORK DONE FOR</h6>
                                <h2 class="text-right"><i class="fa fa-briefcase" aria-hidden="true"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">CLAIM<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-red order-card">
                            <div class="card-block" style="background:#ff4bff;cursor:pointer;" onclick="window.location.href='/admin/machinery-list'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">MACHINERY LIST-</h6>
                                <h2 class="text-right"><i class="fa fa-tachometer" aria-hidden="true"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">JULAY 2023<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-red order-card">
                            <div class="card-block" style="background:#56731b;cursor:pointer;" onclick="window.location.href='/admin/summary-diesel'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">SUMMARY DIESEL</h6>
                                <h2 class="text-right"><i class="fa fa-flag" aria-hidden="true"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">REPORT<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-red order-card">
                            <div class="card-block" style="background:#af1332;cursor:pointer;" onclick="window.location.href='/admin/daily-diesel'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">DAILY DIESEL</h6>
                                <h2 class="text-right"><i class="fa fa-flag" aria-hidden="true"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">REPORT<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block" style="background:#af1332;cursor:pointer;" onclick="window.location.href='/admin/summary-workDone-report'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">Summary Work & Daily Work Report</h6>
                                <h2 class="text-right"><i class="fa fa-flag" aria-hidden="true"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">REPORT<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-red order-card">
                            <div class="card-block" style="background:#af1332;cursor:pointer;" onclick="window.location.href='/admin/daily-workDone-report'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">DAILY Work</h6>
                                <h2 class="text-right"><i class="fa fa-flag" aria-hidden="true"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">REPORT<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-red order-card">
                            <div class="card-block" style="background:#af1332;cursor:pointer;" onclick="window.location.href='/admin/replanting-job'">
                                <h6 class="m-b-20 mb-4" style="color:#fff;">Replanting Job</h6>
                                <h2 class="text-right"><i class="fa fa-flag" aria-hidden="true"></i><span></span></h2>
                                <h2 class="m-b-0" style="color:#fff;">Activity<span class="f-right">8</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- Footer Start -->
@endsection

@push('scripts')

@endpush
