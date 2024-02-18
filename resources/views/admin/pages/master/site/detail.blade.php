@extends('admin.layout.app')

@push('styles')
    <style>
        .dataTables_filter {
            float:right;
        }
        #example1_paginate {
            float: right;
        }
        #example2_paginate {
            float: right;
        }
        #example3_paginate {
            float: right;
        }
        #example4_paginate {
            float: right;
        }
        .site_info {
            margin-bottom:50px;
        }
        input {

        }
        label {
            padding: 2px 10px;
            border: 1px solid #eee;
        }
        input:checked+label {
            background: #000;
            color: #fff
        }


        body,
        html {
            background-color: #fff;
            font-family: "Verdana", Geneva, Tahoma, sans-serif !important;
        }
        html {
            background-color: #fff;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
        }
        body,
        button,
        html,
        input,
        select,
        textarea {
            color: #4d4d4d;
            font-family: "Verdana", Geneva, Tahoma, sans-serif;
            line-height: 20px;
        }
        html {
            height: 100%;
        }

        body {
            background: url(https://d2k1ftgv7pobq7.cloudfront.net/meta/p/res/images/cabe2460fbe75764c50f9adff950be00/board-back.jpg)
            top right no-repeat;
            background-attachment: fixed;
            height: 100%;
            background-size: 100% 100%;
        }


        /*!*Containers css*!*/
        .container-fluid {
            width: 100%;
            margin: 0 auto;
        }
        .container {
            max-width: 1280px;
            margin: 0 auto;
        }

        /*!*header css;*!*/
        .hdr {
            background: #0079bf;
            color: white;
            overflow: hidden;
            z-index: 10;
            max-height: 80px;

            .hdr__img {
                padding: 10px 0;
                max-height: 60px;

                max-width: 300px;
                float: left;
                width: 50%;
                cursor: pointer;
                .hdr__img--src {
                    width: 130px;
                    height: 40px;
                }
            }
            .hdr__btn {
                border: 1px solid #fff;
                padding: 5px;
                border-radius: 3px;
                margin-right: 10px;
            }

            .hdr__right {
                width: 50%;
                text-align: right;
                float: right;
                padding: 20px 0;
                color: #fff;
                .hdr__right > a {
                    text-decoration: none;
                    color: #fff;
                }
            }
        }

        #sprint {
            margin-top: 40px;
        }

        #list__input {
            width: 100%;
            height: 22px;
            margin-bottom: 5px;
            border: none;
            box-shadow: none;
        }

        .list {
            background: #e5eff5;
            padding: 10px 15px;
            margin-right: 20px;
            border-radius: 5px;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 270px;
            -ms-flex: 0 0 270px;
            flex: 0 0 270px;
            max-height: 100%;
            position: relative;
            width: 270px;
            max-width: 270px;
            cursor: pointer;
            transition: all 2s ease-out;

            /*note that we're transitioning flex, not height!*/
            .list-title {
                min-height: 19px;
                font-size: 15px;
                line-height: 18px;
                font-weight: bold;
                color: #172b4d;
                margin: 10px 0;
            }

            .list-cards {
                -webkit-box-flex: 1;
                -webkit-flex: 1 1 auto;
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                overflow-y: auto;
                overflow-x: hidden;
                transition: all 2s ease-out;
                /*note that we're transitioning flex, not height!*/
            }
        }

        .card-form {
            transition: all 2s ease-out;
            .card-form_input {
                width: 98.2%;
                overflow: hidden;
                word-wrap: break-word;
                resize: none;
                height: 36px;
                border: 1px solid #ddd;
                /*border: none;*/
                box-shadow: none;
                border-bottom: none;
                font-size: 16px;
                border-radius: 3px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }
            .card-form_submit {
                width: 100%;
                font-size: 16px;
                color: #fff;
                background: #0079dd70;
                padding: 8px 20px;
                border-radius: 3px;
                transition: all 0.5s ease-in;
                cursor: pointer;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                &:hover {
                    background: #0079dd;
                }
            }
        }

        .list-form {
            transition: all 2s ease-out;
            .list-form__input {
                width: 98.2%;
                overflow: hidden;
                word-wrap: break-word;
                resize: none;
                height: 36px;
                border: 1px solid #ddd;
            // border: none;
                box-shadow: none;
                border-bottom: none;
                font-size: 16px;
                border-radius: 3px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }
            .list-form__submit {
                width: 100%;
                font-size: 16px;
                color: #fff;
                background: #0079dd70;
                padding: 8px 20px;
                border-radius: 3px;
                transition: all 0.5s ease-in;
                cursor: pointer;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                &:hover {
                    background: #0079dd;
                }
            }
        }

        /*.card {*/
        /*    background-color: #fff;*/
        /*    border-bottom: 1px solid #ccc;*/
        /*    border-radius: 3px;*/
        /*    cursor: pointer;*/
        /*    margin-bottom: 6px;*/
        /*    max-width: 300px;*/
        /*    min-height: 20px;*/
        /*    position: relative;*/
        /*    overflow: auto;*/
        /*    padding: 6px 8px 4px;*/
        /*    transition: all 2s ease-out;*/
        /*}*/

        .card div {
            margin-bottom: 5px;
        }

        #card-edit {
            display: none;
            position: absolute;

            width: 800px;
            z-index: 15;
            top: 50px;
            left: 50%;
            margin: 0px 0 0 -300px;
            padding: 50px;
            border-radius: 3px;
            background-color: #ccc;

            #card-edit__close {
                float: right;
                position: absolute;
                top: 15px;
                right: 15px;
                cursor: pointer;
                #card-edit__close--img {
                    width: 20px;
                    height: 20px;
                }
            }

            #card-edit__delete {
                float: left;
                width: 70px;
                background-color: #7b1401;
                color: #fff;
            }
            #card-edit__submit {
                float: right;
                width: 70px;
                background-color: #5aa3f2;
                color: #fff;
            }
            #card-edit__bttn {
                margin-bottom: 10px;
            }
            #card-edit__input {
                #card-edit__input--label {
                    display: inline-block;
                    width: 100px;
                    margin-right: 20px;
                }
                #card-edit__input--title {
                    width: 300px;
                }
            }
        }

        #board__title {
            background: #0b568b40;
            border-radius: 6px;
            font-size: 40px;
            color: #fff;
            padding: 9px 15px;
            display: inline-block;
            font-weight: 500;
            margin-bottom: 20px;
        }

        #board__canvas {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }
    </style>
@endpush
@section('content')
    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center">
            <div class="breadcrumb">
                <h1 class="mr-2">Site Information</h1>
                <ul>
                    <li><a href="{{ route('admin.master.user.index') }}">Site</a></li>
                    <li>Edit</li>
                </ul>
            </div>
        </div>

        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form class="needs-validation" action="{{route("admin.master.postSiteProject")}}" novalidate="novalidate"  method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$id}}" name="id" />
                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label for="project_name">Site name</label>
                        <input class="form-control" id="site_name" type="text" name="site_name" required="true" value="{{ @$site->site_name }}"/>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="project_value">Location</label>
                        <input class="form-control" id="location" type="text" placeholder="Enter Project Value" name="location" required="true" value="{{ @$site->location }}"/>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label for="project_code">Project Code</label>
                        <input class="form-control" id="project_gl_code" type="text" name="project_gl_code"  required="true" readonly value="{{ @$site->project_gl_code }}"/>
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <button type="submit" class="btn btn-warning" id="saveClose">Update</button>
                    </div>
                </div>
            </form>
        </div>
        <section id="tabs" class="project-tab">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-block-tab" data-toggle="tab" href="#nav-block" role="tab" aria-controls="nav-block" aria-selected="true">Block</a>
                            <a class="nav-item nav-link" id="nav-activity-tab" data-toggle="tab" href="#nav-activity" role="tab" aria-controls="nav-activity" aria-selected="false">Activity</a>
                            <a class="nav-item nav-link" id="nav-fuel-tab" data-toggle="tab" href="#nav-fuel" role="tab" aria-controls="nav-fuel" aria-selected="false">Fuel</a>
                            <a class="nav-item nav-link" id="nav-manpower-tab" data-toggle="tab" href="#nav-manpower" role="tab" aria-controls="nav-manpower" aria-selected="false">Manpower</a>
                            <a class="nav-item nav-link" id="nav-machine-tab" data-toggle="tab" href="#nav-machine" role="tab" aria-controls="nav-machine" aria-selected="false">Machine</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-block" role="tabpanel" aria-labelledby="nav-block-tab">
                            <div id="modal1">
                                <div class="card p-4">
                                    <form class="form">
                                        <label style="border:0px !important;font-weight:bold;padding-left:0px !important;">Add New Block</label>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <input type="text" id="blockName" class="form-control" name="block" placeholder="Enter Block Name" />
                                            </div>
                                        </div>
                                        <button class="btn btn-sm btn-success" type="button" onclick="saveBlock()">Add Block</button>
                                    </form>
                                </div>
                                <div class="p-4">
                                    <div class="row" id="rowData">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade " id="nav-activity" role="tabpanel" aria-labelledby="nav-activity-tab">
                            <div id="modal2">
                               
                                    <form action="{{ route('admin.master.addSiteActivities') }}" method="POST">
                                        <div class="row">
                                            <label style="border:0px;font-weight:bold;padding-left:0px;">Select Activities For Site</label>
                                            @csrf
                                            <input type="hidden" value="{{$id}}" name="site_id" />
                                            <select class="form-control js-example-basic-multiple2" name="site_activities[]" multiple style="margin-bottom:20px;">
                                                @foreach($activities as $activity)
                                                    <option value="{{$activity->id}}">{{$activity->work_description}}</option>
                                                @endforeach
                                            </select>
                                            <button style="margin-top:5px;" type="submit" class="btn btn-sm btn-success">Add Activities</button>
                                        </div>
                                    </form>
                             

                                <div class="main-content" style="margin-top:100px;">
                                    <table id="example2" class="table table-striped" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Work Description Activity</th>
                                            <th>UOM </th>
                                            <th>Estimate Quantity</th>
                                            <th>Worker Rate / RM</th>
                                            <th>Contract Rate / Rm</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <p>
                                                    <input disabled type="text" name="estimate_quantity" id="total_estimated_qty" value="{{$estimated_qty}}"  />
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    <input disabled type="text" name="worker_rate" id="total_worker_rate" value="{{$worker_rate}}"  />
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    <input disabled type="text" name="contract_rate" id="total_contract_rate" value="{{$contract_rate}}"  />
                                                </p>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @foreach($site_activities as $dt => $activity)
                                            @php
                                                $blocksData = $activity->activityBlocks;
                                            @endphp
                                            <tr>
                                                <td width="40%;">
                                                    <p style="font-weight:700;margin-bottom:10px">{{ ucfirst($activity->jobActivity->work_description) }}</p>
                                                    @if($blocksData && count($blocksData) > 0)
                                                        @foreach($blocksData as $d => $dt)
                                                            @php
                                                                $index = $d+1;
                                                            @endphp
                                                            <p>
                                                                {{$index}} - {{$dt->block->block_name}}
                                                                <i onclick="deleteActivityBlock({{$activity->id}} , {{$dt->block_id}})" style="cursor:pointer;color:red;" class="fa fa-trash"></i>
                                                            </p>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{ $activity->jobActivity->uom }}</td>
                                                <td>
                                                    @if($blocksData && count($blocksData) > 0)
                                                        @foreach($blocksData as $d => $dt)
                                                            @php
                                                                $index = $d+1;
                                                            @endphp
                                                            <p>
                                                                <input type="number" onchange="updateBlockInfo({{$dt->block_id}} , {{$dt->id}})" name="estimate_quantity" id="eq_{{$dt->id}}_{{$dt->block_id}}" value="{{ isset($dt->blockInfo) ? $dt->blockInfo->estimate_qty : "" }}" />
                                                            </p>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($blocksData && count($blocksData) > 0)
                                                        @foreach($blocksData as $d => $dt)
                                                            @php
                                                                $index = $d+1;
                                                            @endphp
                                                            <p>
                                                                <input type="number" onchange="updateBlockInfo({{$dt->block_id}} , {{$dt->id}})" name="worker_rate" id="wr_{{$dt->id}}_{{$dt->block_id}}" value="{{ isset($dt->blockInfo) ? $dt->blockInfo->worker_rate_rm : "" }}" />
                                                            </p>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($blocksData && count($blocksData) > 0)
                                                        @foreach($blocksData as $d => $dt)
                                                            @php
                                                                $index = $d+1;
                                                            @endphp
                                                            <p>
                                                                <input type="number" onchange="updateBlockInfo({{$dt->block_id}} , {{$dt->id}})" name="contract_rate" id="cr_{{$dt->id}}_{{$dt->block_id}}" value="{{ isset($dt->blockInfo) ? $dt->blockInfo->contract_rate_rm : "" }}" />
                                                            </p>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td class="d-flex flex-row">
                                                    <a href="#" class="btn btn-primary" onclick="addBlockInActivities({{$activity->id}})">Add New Block</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-fuel" role="tabpanel" aria-labelledby="nav-fuel-tab">
                            <div id="modal3">
                                <div class="card text-left" style="background:#efefef">
                                    <div class="card-body">
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        <form class="needs-validation" action="{{route("admin.master.postSiteFuel") }}" novalidate="novalidate" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{$id}}" name="site_id" />
                                            <div class="row">
                                                <div class="dropdown col-md-6 form-group mb-3">
                                                    <label for="diesel_qty">Diesel Opening QTY</label>
                                                    <input class="form-control" id="diesel_qty" type="number" placeholder="Enter Diesel Opening QTY" name="diesel_qty" required="true" value="{{ $fuel->diesel_qty ?? 'Enter Diesel Opening QTY' }}"/>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <button type="submit" class="btn btn-warning" id="saveClose">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-manpower" role="tabpanel" aria-labelledby="nav-manpower-tab">
                            <div id="modal4">
                                <div class="card text-left" style="background:#efefef">
                                    <div class="card-body">
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        <form class="needs-validation" action="{{route("admin.master.postSiteManpower") }}" novalidate="novalidate" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{$id}}" name="site_id" />
                                            <div class="row">
                                                <div class="dropdown col-md-6 form-group mb-3">
                                                    <label for="manager">Manager</label>
                                                    <select class="form-control" id="manager" type="text" placeholder="Enter Manager" name="manager" required="true">
                                                        @foreach($users as $user)
                                                            @if($user->role === 'MANAGER')
                                                                <option>{{ $manpower->manager ?? $user->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="dropdown col-md-6 form-group mb-3">
                                                    <label for="supervisor">Supervisor</label>
                                                    <select class="form-control" id="supervisor" type="text" placeholder="Enter Supervisor" name="supervisor" required="true">
                                                        @foreach($users as $user)
                                                            @if($user->role === 'SUPERVISOR')
                                                                <option>{{ $manpower->supervisor ?? $user->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="dropdown col-md-6 form-group mb-3">
                                                    <label for="mechanic">Mechanic</label>
                                                    <select class="form-control" id="mechanic" type="text" placeholder="Enter Mechanic" name="mechanic" required="true">
                                                        @foreach($users as $user)
                                                            @if($user->role === 'MECHANIC')
                                                                <option>{{ $manpower->mechanic ?? $user->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="dropdown col-md-6 form-group mb-3">
                                                    <label for="operator">Operator</label>
                                                    @php
                                                        $op  = json_decode(@$manpower->operator);
                                                    @endphp
                                                    <select class="form-control js-example-basic-multiple" id="operator" type="text" placeholder="Enter Operator" name="operator[]" multiple required="true">
                                                        @foreach($users as $user)
                                                            @if($user->role === 'OPERATOR')
                                                                <option value="{{$user->id}}" @if($op) @foreach($op as $operator) {{$operator == $user->id ? 'selected':  ' '}} @endforeach @endif >
                                                                    {{$user->name}}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-12 form-group mb-3">
                                                    <button type="submit" class="btn btn-warning" id="saveClose">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-machine" role="tabpanel" aria-labelledby="nav-machine-tab">
                            <div id="modal5">
                                <div class="card text-left" style="background:#efefef">
                                    <div class="card-body">
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        <form class="needs-validation" action="{{route("admin.master.postSiteMachine") }}" novalidate="novalidate" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{$id}}" name="site_id" />
                                            <div class="row">
                                                <div class="dropdown col-md-6 form-group mb-3">
                                                    <label for="machine">Assign Machine List For Site</label>
                                                    @php
                                                        $machines = json_decode(@$machineToSite->machine);
                                                    @endphp
                                                    <select class="form-control js-example-basic-multiple" id="machine" type="text" placeholder="Enter Machine" name="machine[]" multiple required="true">
                                                        @foreach($vehicles as $vehicle)
                                                            <option value="{{$vehicle->id}}" @if($machines) @foreach($machines as $machine) {{$machine == $vehicle->id ? 'selected':  ' '}} @endforeach @endif >
                                                                {{$vehicle->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group mb-3" style="display:none !important;">
                                                    <label for="machine_id">Machine Id</label>
                                                    @php
                                                        $machines = json_decode(@$machineToSite->machine);
                                                    @endphp
                                                    <select class="form-control js-example-basic-multiple" id="machine_id" type="text" placeholder="Enter Machine ID" name="machine_id[]" multiple required="false">
                                                        @foreach($vehicles as $vehicle)
                                                            <option value="{{$vehicle->id}}" @if($machines) @foreach($machines as $machine) {{$machine == $vehicle->id ? 'selected':  ' '}} @endforeach @endif >
                                                                {{$vehicle->vehicle_id}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group mb-3">
                                                <button type="submit" class="btn btn-warning" id="saveClose">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Task</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" id="task_id" />
                        <div class="row">
                            <div class="col-md-12">
                                <label style="border:0px;font-weight:bold;padding-left:0px;">Task Name</label>
                                <input type="text" class="form-control" id="edit_task_value" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateTask()">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <div id="myModalBlock" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <input type="hidden" id="putActivityId" value="" />
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Assign Block To Activity</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" id="task_id" />
                        <div class="row">
                            <div class="col-md-12">
                                <label style="border:0px;font-weight:bold;padding-left:0px;">Select Blocks</label>
                                <select class="form-control" multiple name="blocks[]" id="blocksData">
                                    @foreach($blocks as $block)
                                        <option value="{{$block->id}}">{{$block->block_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="assignBlocksToActivity()">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example1');
        new DataTable('#example2');
        new DataTable('#example3');
        new DataTable('#example4');
        $(document).ready(function() {
            calculateSum();
            $('.js-example-basic-multiple').select2();
            $('.js-example-basic-multiple1').select2();
            $('.js-example-basic-multiple2').select2();
        });
        function addBlockInActivities(id) {
            $('#putActivityId').val(id);
            $('#myModalBlock').modal();
        }
        function calculateSum() {
            let site_id = {{$id}};
            axios.get(`/admin/master/sum-blocks-data/${site_id}`).then(response => {
                if(response.data.status) {
                    $('#total_estimated_qty').val(response.data.estimated_qty);
                    $('#total_worker_rate').val(response.data.worker_rate);
                    $('#total_contract_rate').val(response.data.contract_rate);
                } else {
                    sweetAlert.fire({
                        title: 'Error!',
                        text: response.data.message,
                        icon: 'error'
                    })
                }
            }).catch(error => {
                console.log("error ==>",error);
                sweetAlert.fire({
                    title: 'Error!',
                    text: error,
                    icon: 'error'
                })
            })
        }
        function updateBlockInfo(block_id , activity_block_id) {
            let site_id = {{$id}};
            let estimate_qty = $('#eq_'+activity_block_id+'_'+block_id).val();
            let worker_rate_rm = $('#wr_'+activity_block_id+'_'+block_id).val();
            let contract_rate_rm = $('#cr_'+activity_block_id+'_'+block_id).val();
            let obj = {
                estimate_qty:estimate_qty || "",
                contract_rate_rm:contract_rate_rm || "",
                worker_rate_rm:worker_rate_rm || "",
                block_id:block_id,
                activity_block_id:activity_block_id,
                site_id:site_id
            }
            axios.post(`/admin/master/update-block-info-data`,obj).then(response => {
                console.log("response ==>",response);
                if(response.data.status) {
                    calculateSum();
                } else {
                    sweetAlert.fire({
                        title: 'Error!',
                        text: response.data.message,
                        icon: 'error'
                    })
                }
            }).catch(error => {
                console.log("error ==>",error);
                sweetAlert.fire({
                    title: 'Error!',
                    text: error,
                    icon: 'error'
                })
            })
        }
        function deleteActivityBlock(activity_id , block_id) {
            let site_id = {{$id}};
            axios.get(`/admin/master/delete-activity-block/${activity_id}/${block_id}/${site_id}`).then(response => {
                console.log("response ==>",response);
                if(response.data.status) {
                    sweetAlert.fire({
                        title: 'Success!',
                        text: response.data.message,
                        icon: 'success'
                    })
                    setTimeout(() => {
                        window.location.reload();
                    },1000);
                } else {
                    sweetAlert.fire({
                        title: 'Error!',
                        text: response.data.message,
                        icon: 'error'
                    })
                }
            }).catch(error => {
                console.log("error ==>",error);
                sweetAlert.fire({
                    title: 'Error!',
                    text: error,
                    icon: 'error'
                })
            })
        }
        function updateRowData(activity_id) {
            let eq = $(`#eq_`+activity_id).val();
            let wr = $(`#wr_`+activity_id).val();
            let cr = $(`#cr_`+activity_id).val();
            let obj = {
                site_id: {{$id}},
                activity_id:activity_id,
                estimate_quantity: eq,
                worker_rate: wr,
                contract_rate: cr
            }
            axios.post(`/admin/master/update-record`,obj).then(response => {
                console.log("response ==>",response);
                if(response.data.status) {
                    sweetAlert.fire({
                        title: 'Success!',
                        text: response.data.message,
                        icon: 'success'
                    })
                } else {
                    sweetAlert.fire({
                        title: 'Error!',
                        text: response.data.message,
                        icon: 'error'
                    })
                }
            }).catch(error => {
                console.log("error ==>",error);
                sweetAlert.fire({
                    title: 'Error!',
                    text: error,
                    icon: 'error'
                })
            })
        }
    </script>
    <script>
        var globalArr = [];
        $(document).ready(function () {
            getAllBlocksData();
        });
        function assignBlocksToActivity() {
            let blocks = $('#blocksData').val();
            let activity_id = $('#putActivityId').val();
            let obj = {
                site_id: {{$id}},
                activity_id:parseInt(activity_id),
                blocks: JSON.stringify(blocks)
            }
            axios.post(`/admin/master/assign-block-to-activity`,obj).then(response => {
                console.log("response ==>",response);
                if(response.data.status) {
                    sweetAlert.fire({
                        title: 'Success!',
                        text: response.data.message,
                        icon: 'success'
                    });
                    setTimeout(() => {
                        window.location.reload();
                    },1000);
                } else {
                    sweetAlert.fire({
                        title: 'Error!',
                        text: response.data.message,
                        icon: 'error'
                    })
                }
            }).catch(error => {
                console.log("error ==>",error);
                sweetAlert.fire({
                    title: 'Error!',
                    text: error,
                    icon: 'error'
                })
            })
        }
        function getAllBlocksData() {
            $('#rowData').append("");
            $('#rowData').html("");
            let site_id = {{$id}};
            axios.get(`/admin/master/get-blocks/${site_id}`).then(response => {
                response.data.data.map((dt) => {
                    globalArr.push(dt);
                    let html = `<div class='col-md-2' style="margin:8px;border:1px solid #efefef;padding:13px;">
                                    <div style="display:flex;justify-content:space-between;cursor:pointer;" onclick="deleteBlock(${dt.id})">
                                        <label style="border:0px !important;font-weight:bold;padding-left:0px !important;">${dt.block_name}</label>
                                        <i class="fa fa-trash" style="color:red"></i>
                                    </div>
                                    <div style="margin-bottom:12px;">
                                        <input type='text' id='task_${dt.id}' class='form-control' placeholder="enter task name" />
                                        <ul style="padding-left:5px;list-style:none;margin-top:5px;">
                                            ${renderList(dt?.tasks || [] , dt.id)}
                                        </ul>
                                    </div>
                                    <button class="btn btn-sm btn-success" type="button" onclick="addTask(${dt.id})">Add Task</button>
                                </div>`;
                    $('#rowData').append(html);
                });
            }).catch(error => {
                console.log("error =>" , error);
            })
        }
        function renderList(list , block_id) {
            const listData = list.map((dt) => {
                return `<li style="margin-top:8px;padding:6px;border:1px solid #efefef;display:flex;justify-content: space-between;align-items: center;">
                            ${dt.task_name}
                            <div>
                                <i class="fa fa-times" style="color:red;cursor:pointer;" onclick="delTask(${dt.id})"></i>
                                <i class="fa fa-pencil" style="color:green;cursor:pointer;" onclick="openModal('${dt.id +','+ dt.task_name}')"></i>
                            </div>
                        </li>`
            });
            return listData.join(" ");
        }
        function openModal(data) {
            let dt = data.split(',');
            let id = dt[0];
            let name = dt[1];
            $('#task_id').val(id);
            $('#edit_task_value').val(name);
            $("#myModal").modal()
        }
        function saveBlock() {
            let name = $('#blockName').val();
            let form = new FormData();
            form.append('block_name',name);
            form.append('site_id', {{$id}});
            axios.post('/admin/master/save-block',form).then(response => {
                if(response.data.status) {
                    sweetAlert.fire({
                        title: 'Success!',
                        text: response.data.message,
                        icon: 'success'
                    });
                    setTimeout(() => {
                        window.location.reload();
                    },1000);
                    getAllBlocksData();
                } else {
                    sweetAlert.fire({
                        title: 'Error!',
                        text: response.data.message,
                        icon: 'error'
                    })
                }
            }).catch(error => {
                console.log("error =>" , error);
            })
        }
        function addTask(id) {
            let task_name = $('#task_'+id).val();
            let form = new FormData();
            form.append('block_id',id);
            form.append('task_name',task_name);
            axios.post('/admin/master/save-task',form).then(response => {
                if(response.data.status) {
                    sweetAlert.fire({
                        title: 'Success!',
                        text: response.data.message,
                        icon: 'success'
                    })
                    getAllBlocksData();
                } else {
                    sweetAlert.fire({
                        title: 'Error!',
                        text: response.data.message,
                        icon: 'error'
                    })
                }
            }).catch(error => {
                console.log("error =>" , error);
            })
        }
        function updateTask() {
            let task_id = $('#task_id').val();
            let task_name = $('#edit_task_value').val();
            let form = new FormData();
            form.append('id',task_id);
            form.append('task_name',task_name);
            axios.post('/admin/master/update-task',form).then(response => {
                if(response.data.status) {
                    sweetAlert.fire({
                        title: 'Success!',
                        text: response.data.message,
                        icon: 'success'
                    })
                    getAllBlocksData();
                } else {
                    sweetAlert.fire({
                        title: 'Error!',
                        text: response.data.message,
                        icon: 'error'
                    })
                }
            }).catch(error => {
                console.log("error =>" , error);
            })
        }
        function deleteBlock(id) {
            axios.get(`/admin/master/delete-block/${id}`).then(response => {
                if(response.data.status) {
                    sweetAlert.fire({
                        title: 'Success!',
                        text: response.data.message,
                        icon: 'success'
                    })
                    getAllBlocksData();
                } else {
                    sweetAlert.fire({
                        title: 'Error!',
                        text: response.data.message,
                        icon: 'error'
                    })
                }
            }).catch(error => {
                console.log("error =>" , error);
            })
        }
        function delTask(id) {
            axios.get(`/admin/master/delete-task/${id}`).then(response => {
                if(response.data.status) {
                    sweetAlert.fire({
                        title: 'Success!',
                        text: response.data.message,
                        icon: 'success'
                    })
                    getAllBlocksData();
                } else {
                    sweetAlert.fire({
                        title: 'Error!',
                        text: response.data.message,
                        icon: 'error'
                    })
                }
            }).catch(error => {
                console.log("error =>" , error);
            })
        }
    </script>
@endpush


