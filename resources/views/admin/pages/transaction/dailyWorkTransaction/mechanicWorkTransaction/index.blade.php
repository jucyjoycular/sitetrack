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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Mechanic Work Transaction</h2>
        <div class="row justify-content-center">
            <div class="col-md-12" style="position:relative; ">
                <div style="width:200px;position:absolute;right:185px;margin-top:1px;z-index:9999;">
                    <label style="margin-bottom:0px;">Mesin ID</label>
                    <select class="form-control" style="height:27px;padding:4px 14px;">
                        <option selected disabled>Select Mesin ID</option>
                        <option>LKY208</option>
                        <option>LKY273</option>
                        <option>LKY245</option>
                        <option>LKY244</option>
                        <option>LKY238</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12" style="position:relative; right: 210px; ">
                <div style="width:200px;position:absolute;right:185px;margin-top:1px;z-index:9999;">
                    <label style="margin-bottom:0px;">Month</label>
                    <select class="form-control" style="height:27px;padding:4px 14px;">
                        <option selected disabled>Select Month</option>
                        <option>OCT</option>
                        <option>NOV</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12" style="position:relative; right: 420px; ">
                <div style="width:200px;position:absolute;right:185px;margin-top:1px;z-index:9999;">
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
        <div class="row justify-content-center">
            <div class="col-md-12" style="position:relative; right: 630px; ">
                <div style="width:200px;position:absolute;right:185px;margin-top:1px;z-index:9999;">
                    <label style="margin-bottom:0px;">Mechanic</label>
                    <select class="form-control" style="height:27px;padding:4px 14px;">
                        <option selected disabled>Select Site</option>
                        <option>Mechanic 1</option>
                        <option>Mechanic 2</option>
                        <option>Mechanic 3</option>
                        <option>Mechanic 4</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12" style="position:relative; right: 840px; ">
                <div style="width:200px;position:absolute;right:185px;margin-top:1px;z-index:9999;">
                    <label style="margin-bottom:0px;">Activity</label>
                    <select class="form-control" style="height:27px;padding:4px 14px;">
                        <option selected disabled>Select Site</option>
                        <option>Feling &amp; Chipping</option>
                        <option>Deboling</option>
                        <option>cect</option>
                        <option>Stacking</option>
                    </select>
                </div>
            </div>
        </div>

        <table id="example2" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Date</th>
                <th>Site Code</th>
                <th>Name</th>
                <th>Activity</th>
                <th>Work detail</th>
                <th>Contractor</th>
                <th>Supplier</th>
                <th>Mesin ID</th>
                <th>Diesel In</th>
                <th>Receipt No</th>
                <th>Diesel Out</th>
                <th>Transfer Site</th>
                <th>Block</th>
                <th>Start</th>
                <th>End</th>
                <th>Fuel Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>11/11/2023</td>
                <td>T07</td>
                <td>Karim</td>
                <td>Daily Activity</td>
                <td>Repairing</td>
                <td></td>
                <td></td>
                <td>LYK255</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>M1</td>
                <td>7:00 AM</td>
                <td>12:00 PM</td>
                <td></td>
            </tr>
            <tr>
                <td>11/11/2023</td>
                <td>T08</td>
                <td>Sahdan</td>
                <td>Fuel Transfer</td>
                <td>Issue to Machine</td>
                <td></td>
                <td></td>
                <td>LYK244</td>
                <td></td>
                <td></td>
                <td>998</td>
                <td></td>
                <td>M1</td>
                <td>1:00 PM</td>
                <td>3:00 PM</td>
                <td></td>
            </tr>
            <tr>
                <td>11/11/2023</td>
                <td>M01</td>
                <td>Kadir</td>
                <td>Fuel Transfer</td>
                <td>Issue to other site</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>2356</td>
                <td>Melacca</td>
                <td></td>
                <td>7:00 AM</td>
                <td>12:00 PM</td>
                <td></td>
            </tr>
            <tr>
                <td>11/11/2023</td>
                <td>M02</td>
                <td>Naim</td>
                <td>Fuel Transfer</td>
                <td>Issue to contractor</td>
                <td>Salam</td>
                <td></td>
                <td>LYK125</td>
                <td></td>
                <td></td>
                <td>1123</td>
                <td></td>
                <td>M1</td>
                <td>1:00 PM</td>
                <td>5:00 PM</td>
                <td></td>
            </tr>
            <tr>
                <td>12/11/2023</td>
                <td>M03</td>
                <td>Karim</td>
                <td>Fuel Transfer</td>
                <td>Issue to other site</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>3111</td>
                <td>Kuala Lumpur</td>
                <td></td>
                <td>7:00 AM</td>
                <td>12:00 PM</td>
                <td></td>
            </tr>
            <tr>
                <td>12/11/2023</td>
                <td>M04</td>
                <td>Sahdan</td>
                <td>Daily Activity</td>
                <td>Repairing</td>
                <td></td>
                <td></td>
                <td>LYK238</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>M1</td>
                <td>7:00 AM</td>
                <td>12:00 PM</td>
                <td></td>
            </tr>
            <tr>
                <td>12/11/2023</td>
                <td>T06</td>
                <td>Kadir</td>
                <td>Daily Activity</td>
                <td>Repairing</td>
                <td></td>
                <td></td>
                <td>LYK426</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>M1</td>
                <td>7:00 AM</td>
                <td>12:00 PM</td>
                <td></td>
            </tr>
            <tr>
                <td>12/11/2023</td>
                <td>T07</td>
                <td>Naim</td>
                <td>Daily Activity</td>
                <td>Diesel check</td>
                <td></td>
                <td></td>
                <td>LYK145</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>M1</td>
                <td>7:00 AM</td>
                <td>12:00 PM</td>
                <td></td>
            </tr>
            <tr>
                <td>12/11/2023</td>
                <td>T07</td>
                <td>Naim</td>
                <td>Daily Activity</td>
                <td>Received From Supplier</td>
                <td></td>
                <td>SupABC</td>
                <td>LYK145</td>
                <td>3000</td>
                <td>AA1122</td>
                <td></td>
                <td></td>
                <td></td>
                <td>7:00 AM</td>
                <td>12:00 PM</td>
                <td> <input placeholder="Only Admin Enter Price" /> </td>
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
