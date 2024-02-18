@extends('admin.layout.app')

@push('styles')
    <style>
        .dataTables_filter {
            float:right;
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
    </style>
@endpush

@section('content')
    <div class="main-content">
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Machinery Expense Record</h2>
        <div class="container-fluid">

            <div class="container mt-5 text-center">
                <h2 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;"> Import Machinery Expense </h2>
                <form action="/admin/spare-costing-import" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                        <div class="custom-file text-left" style="width: 50%;">
                            <input type="file" name="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" style="width: 15%;">Proceed</button>
{{--                    <a class="btn btn-success" href="/admin/spare-costing-export">Export data</a>--}}
                </form>
            </div>
            <br/>
            <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">- SPARE PART & TRANSPORTATION COSTING </h3>
            <table id="example3" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Code</th>
                    <th>Machinery</th>
                    <th>Ref. 1</th>
                    <th>Ref. 2</th>
                    <th>Description</th>
                    <th>Debt (RM)</th>
                    <th>Credit (RM)</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vehicle_expense_transactions as $data)
                    <tr>
                        <td>{{$data->date}}</td>
                        <td>{{$data->code}}</td>
                        <td>{{$data->machinery}}</td>
                        <td>{{$data->ref_1}}</td>
                        <td>{{$data->ref_2}}</td>
                        <td>{{$data->description}}</td>
                        <td>{{$data->debt}}</td>
                        <td>{{$data->credit}}</td>
                        <td>
                            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">Edit Info</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">-------------------------------------------------</h3><br/>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">Note:                        </h3><br/>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">JT = JOURNAL TYRE      G = GENERAL LEDGER</h3><br/>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">B = BANK               P = PURCHASE LEDGER</h3><br/>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">C = CASH/ PETTY CASH   S = SALES LEDGER</h3><br/>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">-------------------------------------------------</h3><br/>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example2');
        new DataTable('#example3');
        new DataTable('#example4');
    </script>
@endpush
