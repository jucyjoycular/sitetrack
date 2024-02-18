@extends('admin.layout.app')

@push('styles')
    <style>
        .dataTables_filter {
            float:right;
        }
        #example3_paginate {
            float: right;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Salary for Mechanic</h2>
        <div class="row justify-content-center">
            <div class="col-md-12" style="position:relative;">
                <div style="width:200px;position:absolute;right:620px;margin-top:1px;z-index:9999;">
                    <label style="margin-bottom:0px;">Generate</label>
                    <select class="form-control" style="height:27px;padding:4px 14px;">
                        <option selected disabled>Preview Type</option>
                        <option>Pdf</option>
                        <option>Exel</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12" style="position:relative;">
                <div style="width:200px;position:absolute;right:410px;margin-top:1px;z-index:9999;">
                    <label style="margin-bottom:0px;">Filter By</label>
                    <select class="form-control" style="height:27px;padding:4px 14px;" >
                        <option selected disabled>Month</option>
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
                        <option>April</option>
                        <option>May</option>
                        <option>Jun</option>
                        <option>July</option>
                        <option>Aug</option>
                        <option>Sept</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Dec</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12" style="position:relative;">
                <div style="width:200px;position:absolute;right:200px;margin-top:1px;z-index:9999;">
                    <label style="margin-bottom:0px;">Search By</label>
                    <select class="form-control " style="height:27px;padding:4px 14px;" id="post">
                        <option selected disabled>Worker</option>
                        <option>Operator</option>
                        <option>Mechanic</option>
                        <option>Supervisor</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="container-fluid module" id="module-1">
            <table id="example3" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">RM Amount Sent</th>
                </tr>
                <tr>
                    <th>QTY</th>
                    <th>Description</th>
                    <th colspan="2">Unit Price</th>
                    <th colspan="2">DR (+)</th>
                    <th >CR (-)</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" value="1" /></td>
                    <td>Salary For Oct'23</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td><input type="text" value="-" /></td>
                    <td>Compaction M1(04/06) 9.07</td>
                    <td></td>
                    <td></td>
                    <td>453</td>
                    <td>50</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="text" value="-" /></td>
                    <td>Compaction M1(04/07) 12.15</td>
                    <td></td>
                    <td></td>
                    <td>607</td>
                    <td>50</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="text" value="-" /></td>
                    <td>Compaction M1(04/08) 16.19</td>
                    <td></td>
                    <td></td>
                    <td>453</td>
                    <td>50</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="text" value="2" /></td>
                    <td>Motor RM3000 (Ref slip:6476)(Bal: RM2500)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>500</td>
                    <td>0.0</td>
                </tr>
                <tr>
                    <td><input type="text" value="-" /></td>
                    <td></td>
                    <td>Total RM</td>
                    <td></td>
                    <td>6887.01</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example3');

        $(function() {
            let modules = $('.module').hide();

            $('#post').on('change', function() {
                let value = $(this).val();
                modules.show();
                $('#module-' + value).show();
            });
        });
    </script>
@endpush
