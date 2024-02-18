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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Site Expanse Record</h2>
        <div class="container-fluid" >

            <div class="container mt-5 text-center">

                <h2 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;"> Import Site Expense </h2>
                <form action="/admin/misc-costing-import" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                        <div class="custom-file text-left" style="width: 50%;">
                            <input type="file" name="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" style="width: 15%;">Proceed</button>
{{--                    <a class="btn btn-success" href="/admin/misc-costing-export">Export data</a>--}}
                </form>
            </div>
            <br/>

            <h3 class="mb-2" style="margin-bottom:12px; width:100%; text-align:center;font-weight:bold;">MISC - COSTING (MATERIAL) </h3>
            <table id="example3" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Code</th>
                    <th>Ref. 1</th>
                    <th>Ref. 2</th>
                    <th>Description</th>
                    <th>Debt (RM)</th>
                    <th>Credit (RM)</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($site_expense_transactions as $data)
                    <tr>
                        <td>{{$data->date}}</td>
                        <td>{{$data->code}}</td>
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
{{--                <tr>--}}
{{--                    <td>22/08/2022</td>--}}
{{--                    <td>6000/300</td>--}}
{{--                    <td>SKHB-INV018-22</td>--}}
{{--                    <td></td>--}}
{{--                    <td>ERAMAS ENTERPRISE (SA2011321)</td>--}}
{{--                    <td>730.00</td>--}}
{{--                    <td></td>--}}
{{--                    <td>--}}
{{--                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">Edit Info</button>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>17/08/2022</td>--}}
{{--                    <td>6000/300</td>--}}
{{--                    <td>EE-INV018-22</td>--}}
{{--                    <td></td>--}}
{{--                    <td>ERAMAS ENTERPRISE (SA2011321)</td>--}}
{{--                    <td>730.00</td>--}}
{{--                    <td></td>--}}
{{--                    <td>--}}
{{--                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">Edit Info</button>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>17/08/2022</td>--}}
{{--                    <td>6000/300</td>--}}
{{--                    <td>EE-INV018-22</td>--}}
{{--                    <td></td>--}}
{{--                    <td>ERAMAS ENTERPRISE (SA2011321)</td>--}}
{{--                    <td>730.00</td>--}}
{{--                    <td></td>--}}
{{--                    <td>--}}
{{--                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">Edit Info</button>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>17/08/2022</td>--}}
{{--                    <td>6000/300</td>--}}
{{--                    <td>EE-INV018-22</td>--}}
{{--                    <td></td>--}}
{{--                    <td>ERAMAS ENTERPRISE (SA2011321)</td>--}}
{{--                    <td>730.00</td>--}}
{{--                    <td></td>--}}
{{--                    <td>--}}
{{--                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">Edit Info</button>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>17/08/2022</td>--}}
{{--                    <td>6000/300</td>--}}
{{--                    <td>EE-INV018-22</td>--}}
{{--                    <td></td>--}}
{{--                    <td>ERAMAS ENTERPRISE (SA2011321)</td>--}}
{{--                    <td>730.00</td>--}}
{{--                    <td></td>--}}
{{--                    <td>--}}
{{--                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">Edit Info</button>--}}
{{--                    </td>--}}
{{--                </tr><tr>--}}
{{--                    <td>17/08/2022</td>--}}
{{--                    <td>6000/300</td>--}}
{{--                    <td>EE-INV018-22</td>--}}
{{--                    <td></td>--}}
{{--                    <td>ERAMAS ENTERPRISE (SA2011321)</td>--}}
{{--                    <td>730.00</td>--}}
{{--                    <td></td>--}}
{{--                    <td>--}}
{{--                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">Edit Info</button>--}}
{{--                    </td>--}}
{{--                </tr>--}}
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Date</label>
                                            <input type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Code</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ref 1</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ref 2</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea type="text" rows="4" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Debt (RM)</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Credit (RM)</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
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

        $(document).ready(function(){
            $('.addRow').click(function(){
                addRow();
            });

            $('body').on('click', '.btn-remove', function(){
                var row = $(this).closest('tr');
                row.remove();
            });

            function addRow() {
                var tr = '<tr>' +
                    '<td><input type="text" name="id[]" class="form-control" /></td>' +
                    '<td><input type="text" name="name[]" class="form-control" /></td>' +
                    '<td><input type="text" name="email[]" class="form-control" /></td>' +
                    '<td><button type="button" name="remove" class="btn btn-danger btn-remove">Remove</button></td>' +
                    '</tr>';
                $('#dynamic_field').append(tr);
            }
        });
    </script>
@endpush
