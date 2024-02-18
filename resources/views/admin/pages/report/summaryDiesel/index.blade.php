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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">SUMMARY DIESEL REPORT</h2>

        <div class="d-flex flex-row float-right" >
            <div class="row justify-content-center" style="margin-left: 0px;">
                <div class="col-md-12">
                    <div style="width:200px; margin-top:1px; z-index:9999;">
                        <label style="margin-bottom:0px;">Month</label>
                        <select class="form-control" style="height:27px;padding:4px 14px;">
                            <option selected disabled>Select Month</option>
                            <option>OCT</option>
                            <option>NOV</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-left: 0px;">
                <div class="col-md-12" style="position:relative; ">
                    <div style="width:200px; margin-top:1px; z-index:9999;">
                        <label style="margin-bottom:0px;">Site</label>
                        <select class="form-control" style="height:27px;padding:4px 14px;">
                            <option selected disabled>Select Site</option>
                            <option>M01</option>
                            <option>M02</option>
                            <option>M03</option>
                            <option>M04</option>
                            <option>T06</option>
                            <option>T07</option>
                            <option>T08</option>
                            <option>T09</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <table id="example2" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>OPEN BALANCE (LTR):</th>
                    <th>8406</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                    <th>01-31 May 2023</th>
                </tr>
                <tr>
                    <th></th>
                    <th>IN</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>OUT</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th>DATE</th>
                    <th>SUPPLIER (LTR)</th>
                    <th>ESTATE (LTR)</th>
                    <th>TRANSFER (LTR)</th>
                    <th>DATE</th>
                    <th>LYK (LTR)</th>
                    <th>TRANSPER (LTR)</th>
                    <th>CONTRACTOR (LTR)</th>
                    <th>WEEK</th>
                    <th>BALANCE BRING FORWARD (LTR)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01/05/2023</td>
                    <td>12000</td>
                    <td>-</td>
                    <td>-</td>
                    <td>01/05/2023</td>
                    <td>152</td>
                    <td>Test Report</td>
                    <td>Test Remark</td>
                    <td>Test Remark</td>
                    <td>Test Remark</td>
                </tr>
                <tr>
                    <td>01/05/2023</td>
                    <td>12000</td>
                    <td>-</td>
                    <td>-</td>
                    <td>01/05/2023</td>
                    <td>152</td>
                    <td>Test Report</td>
                    <td>Test Remark</td>
                    <td>Test Remark</td>
                    <td>Test Remark</td>
                </tr>
                </tbody>
            </table>
        <br>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example2');
    </script>
@endpush
