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
        #example8_paginate {
            float: right;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center" style="border-bottom:1px solid #efefef; margin-bottom: 30px;">
            <div class="breadcrumb" >
                <h1 class="mr-2 " style="font-weight: bold;">Operator Work Transaction</h1>
            </div>
            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">Add Verified Work Done</button>
        </div>

        <div class="d-flex flex-row float-right" >
            <div class="row justify-content-center">
                <div class="col-md-12" >
                    <div style="width:200px; margin-top:1px; z-index:9999;">
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
            <div class="row justify-content-center" style="margin-left: 0px;">
                <div class="col-md-12" style="position:relative;">
                    <div style="width:200px; margin-top:1px; z-index:9999;">
                        <label style="margin-bottom:0px;">Operator</label>
                        <select class="form-control" style="height:27px;padding:4px 14px;">
                            <option selected disabled>Select Site</option>
                            <option>Operator 1</option>
                            <option>Operator 2</option>
                            <option>Operator 3</option>
                            <option>Operator 4</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-left: 0px;">
                <div class="col-md-12" style="position:relative; ">
                    <div style="width:200px; margin-top:1px; z-index:9999;">
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
        </div>

        <table id="example8" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Date</th>
                <th>Month</th>
                <th>Site Code</th>
                <th>Name</th>
                <th>Activity</th>
                <th>Transaction No</th>
                <th>UOM</th>
                <th>Block</th>
                <th>Task</th>
                <th>Start</th>
                <th>End</th>
                <th>Mesin ID</th>
                <th>Fuel</th>
                <th>Wages by Activity</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>28 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Salman</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 5.55</td>
            </tr>
            <tr>
                <td>28 Oct 2023</td>
                <td>Oct</td>
                <td>T07</td>
                <td>Salman</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 10.75</td>
            </tr>
            <tr>
                <td>28 Oct 2023</td>
                <td>Oct</td>
                <td>T08</td>
                <td>Salman</td>
                <td>cect</td>
                <<td>123456</td>
                <td>Meters</td>
                <td>M13</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 56.15</td>
            </tr>
            <tr>
                <td>28 Oct 2023</td>
                <td>Oct</td>
                <td>M01</td>
                <td>Samsuddin</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>15:00</td>
                <td>LYK244</td>
                <td>14511</td>
                <td>RM 5.38</td>
            </tr>
            <tr>
                <td>28 Oct 2023</td>
                <td>Oct</td>
                <td>M02</td>
                <td>Samsuddin</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>15:00</td>
                <td>LYK244</td>
                <td>14511</td>
                <td>RM 9.90</td>
            </tr>
            <tr>
                <td>28 Oct 2023</td>
                <td>Oct</td>
                <td>M03</td>
                <td>Rustam</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>14:00</td>
                <td>LYK245</td>
                <td>12355</td>
                <td>RM 15.75</td>
            </tr>
            <tr>
                <td>28 Oct 2023</td>
                <td>Oct</td>
                <td>M04</td>
                <td>Rustam</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M13</td>
                <td></td>
                <td>7:00</td>
                <td>14:00</td>
                <td>LYK245</td>
                <td>12355</td>
                <td>RM 7.25</td>
            </tr>
            <tr>
                <td>28 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Aswan</td>
                <td>Stacking</td>
                <td>123456</td>
                <td>HA</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK273</td>
                <td>13255</td>
                <td>RM 5.00</td>
            </tr>
            <tr>
                <td>28 Oct 2023</td>
                <td>Oct</td>
                <td>T07</td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK273</td>
                <td>13255</td>
                <td>RM 10.95</td>
            </tr>
            <tr>
                <td>29 Oct 2023</td>
                <td>Oct</td>
                <td>T08</td>
                <td>Salman</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td>Task2</td>
                <td>7:00</td>
                <td>16:00</td>
                <td>LYK238</td>
                <td>9875</td>
                <td>RM 10.60</td>
            </tr>
            <tr>
                <td>29 Oct 2023</td>
                <td>Oct</td>
                <td>T09</td>
                <td>Salman</td>
                <td>Stacking</td>
                <td>123456</td>
                <td>HA</td>
                <td>M3</td>
                <td></td>
                <td>7:00</td>
                <td>16:00</td>
                <td>LYK238</td>
                <td>9875</td>
                <td>RM 5.00</td>
            </tr>
            <tr>
                <td>29 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Samsuddin</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 6.13</td>
            </tr>
            <tr>
                <td>29 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Samsuddin</td>
                <td>Stacking</td>
                <td>123456</td>
                <td>HA</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 5.00</td>
            </tr>
            <tr>
                <td>29 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Samsuddin</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 7.25</td>
            </tr>
            <tr>
                <td>29 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Rustam</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td>Task1</td>
                <td>7:00</td>
                <td>5:00</td>
                <td>LYK2O8</td>
                <td>11875</td>
                <td>RM 13.95</td>
            </tr>
            <tr>
                <td>29 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>29 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>29 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>30 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Salman</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 5.55</td>
            </tr>
            <tr>
                <td>30 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Salman</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 10.75</td>
            </tr>
            <tr>
                <td>30 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Salman</td>
                <td>cect</td>
                <<td>123456</td>
                <td>Meters</td>
                <td>M13</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 89.45</td>
            </tr>
            <tr>
                <td>30 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Samsuddin</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>15:00</td>
                <td>LYK244</td>
                <td>14511</td>
                <td>RM 5.38</td>
            </tr>
            <tr>
                <td>30 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Samsuddin</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>15:00</td>
                <td>LYK244</td>
                <td>14511</td>
                <td>RM 9.90</td>
            </tr>
            <tr>
                <td>30 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Rustam</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>14:00</td>
                <td>LYK245</td>
                <td>12355</td>
                <td>RM 15.75</td>
            </tr>
            <tr>
                <td>30 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Rustam</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M13</td>
                <td></td>
                <td>7:00</td>
                <td>14:00</td>
                <td>LYK245</td>
                <td>12355</td>
                <td>RM 7.25</td>
            </tr>
            <tr>
                <td>30 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Aswan</td>
                <td>Stacking</td>
                <td>123456</td>
                <td>HA</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK273</td>
                <td>13255</td>
                <td>RM 5.00</td>
            </tr>
            <tr>
                <td>30 Oct 2023</td>
                <td>Oct</td>
                <td>T06</td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK273</td>
                <td>13255</td>
                <td>RM 10.95</td>
            </tr>
            <tr>
                <td>9 Nov 2023</td>
                <td>Nov</td>
                <td>T06</td>
                <td>Salman</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>12:00</td>
                <td>LYK238</td>
                <td>9875</td>
                <td>RM 10.60</td>
            </tr>
            <tr>
                <td>9 Nov 2023</td>
                <td>Nov</td>
                <td>T06</td>
                <td>Salman</td>
                <td>Rosak</td>
                <td>123456</td>
                <td></td>
                <td></td>
                <td></td>
                <td>7:00</td>
                <td>12:00</td>
                <td>LYK238</td>
                <td>9875</td>
                <td></td>
            </tr>
            <tr>
                <td>9 Nov 2023</td>
                <td>Nov</td>
                <td>T06</td>
                <td>Samsuddin</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 6.13</td>
            </tr>
            <tr>
                <td>9 Nov 2023</td>
                <td>Nov</td>
                <td>T06</td>
                <td>Samsuddin</td>
                <td>Stacking</td>
                <td>123456</td>
                <td>HA</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 5.00</td>
            </tr>
            <tr>
                <td>9 Nov 2023</td>
                <td>Nov</td>
                <td>T06</td>
                <td>Samsuddin</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 7.25</td>
            </tr>
            <tr>
                <td>9 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Rustam</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td>Task1</td>
                <td>7:00 AM</td>
                <td>5:00</td>
                <td>LYK2O8</td>
                <td>11875</td>
                <td>RM 13.95</td>
            </tr>
            <tr>
                <td>9 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>9 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>9 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>10 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Salman</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 5.55</td>
            </tr>
            <tr>
                <td>10 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Salman</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 10.75</td>
            </tr>
            <tr>
                <td>10 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Salman</td>
                <td>cect</td>
                <<td>123456</td>
                <td>Meters</td>
                <td>M13</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 89.45</td>
            </tr>
            <tr>
                <td>10 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Samsuddin</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>15:00</td>
                <td>LYK244</td>
                <td>14511</td>
                <td>RM 5.38</td>
            </tr>
            <tr>
                <td>10 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Samsuddin</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>15:00</td>
                <td>LYK244</td>
                <td>14511</td>
                <td>RM 9.90</td>
            </tr>
            <tr>
                <td>10 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Rustam</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>14:00</td>
                <td>LYK245</td>
                <td>12355</td>
                <td>RM 15.75</td>
            </tr>
            <tr>
                <td>10 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Rustam</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M13</td>
                <td></td>
                <td>7:00</td>
                <td>14:00</td>
                <td>LYK245</td>
                <td>12355</td>
                <td>RM 7.25</td>
            </tr>
            <tr>
                <td>10 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Stacking</td>
                <td>123456</td>
                <td>HA</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK273</td>
                <td>13255</td>
                <td>RM 5.00</td>
            </tr>
            <tr>
                <td>10 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK273</td>
                <td>13255</td>
                <td>RM 10.95</td>
            </tr>
            <tr>
                <td>11 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Salman</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>16:00</td>
                <td>LYK238</td>
                <td>9875</td>
                <td>RM 10.60</td>
            </tr>
            <tr>
                <td>11 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Salman</td>
                <td>Stacking</td>
                <td>123456</td>
                <td>HA</td>
                <td>M3</td>
                <td></td>
                <td>7:00</td>
                <td>16:00</td>
                <td>LYK238</td>
                <td>9875</td>
                <td>RM 5.00</td>
            </tr>
            <tr>
                <td>11 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Samsuddin</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 6.13</td>
            </tr>
            <tr>
                <td>11 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Samsuddin</td>
                <td>Stacking</td>
                <td>123456</td>
                <td>HA</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 5.00</td>
            </tr>
            <tr>
                <td>11 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Samsuddin</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 7.25</td>
            </tr>
            <tr>
                <td>11 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Rustam</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td>Task1</td>
                <td>7:00</td>
                <td>5:00</td>
                <td>LYK2O8</td>
                <td>11875</td>
                <td>RM 7.25</td>
            </tr>
            <tr>
                <td>11 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>11 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>11 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Salman</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 5.55</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Salman</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 10.75</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Salman</td>
                <td>cect</td>
                <<td>123456</td>
                <td>Meters</td>
                <td>M13</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 89.45</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Samsuddin</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>15:00</td>
                <td>LYK244</td>
                <td>14511</td>
                <td>RM 5.38</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Samsuddin</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>15:00</td>
                <td>LYK244</td>
                <td>14511</td>
                <td>RM 10.55</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Rustam</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>14:00</td>
                <td>LYK245</td>
                <td>12355</td>
                <td>RM 15.75</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Rustam</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M13</td>
                <td></td>
                <td>7:00</td>
                <td>14:00</td>
                <td>LYK245</td>
                <td>12355</td>
                <td>RM 7.25</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Stacking</td>
                <td>123456</td>
                <td>HA</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK273</td>
                <td>13255</td>
                <td>RM 5.00</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK273</td>
                <td>13255</td>
                <td>RM 10.60</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Salman</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>12:00</td>
                <td>LYK238</td>
                <td>9875</td>
                <td>RM 10.60</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Salman</td>
                <td>Rosak</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>LYK238</td>
                <td>9875</td>
                <td></td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Samsuddin</td>
                <td>Deboling</td>
                <td>123456</td>
                <td>Bole</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 6.13</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Samsuddin</td>
                <td>Stacking</td>
                <td>123456</td>
                <td>Meters</td>
                <td>M23</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 5.00</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Samsuddin</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 7.25</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Rustam</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td>Task1</td>
                <td>7:00</td>
                <td>5:00</td>
                <td>LYK2O8</td>
                <td>11875</td>
                <td>RM 13.95</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            <tr>
                <td>12 Nov 2023</td>
                <td>Nov</td>
                <td></td>
                <td>Aswan</td>
                <td>Feling &amp; Chipping</td>
                <td>123456</td>
                <td>Palm</td>
                <td>M1</td>
                <td></td>
                <td>7:00</td>
                <td>17:00</td>
                <td>LYK238</td>
                <td>10778</td>
                <td>RM 11.15</td>
            </tr>
            </tbody>
        </table>
        <br>

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
                                        <label for="exampleInputEmail1">Month</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Month">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Site Code</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Site Code">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Activity</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Activity">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Quantity</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">UOM</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter UOM">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Block</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Block">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Task</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Task">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Start</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Start">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">End</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter End">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">MESIN ID</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter MESIN ID">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fuel</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fuel">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Wages by Activity</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Wages by Activity">
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
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example8');
    </script>
@endpush
