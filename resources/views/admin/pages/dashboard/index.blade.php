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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Summary Work Done Performance</h2>
        <div style="border: 1px solid; width: 300px; padding-top: 10px; margin-top: -40px; margin-bottom: 10px;">
            <p style="border-bottom: 1px solid">Sop Plantation</p>
            <p style="border-bottom: 1px solid">Replanting Works</p>
            <p>Taneku to estate</p>
        </div>
        <div style="border: 1px solid; width: 300px; padding-top: 10px; margin-bottom: 10px;">
            <p style="border-bottom: 1px solid">213 HA</p>
            <p style="border-bottom: 1px solid">Contract No</p>
            <p style="border-bottom: 1px solid">Tender No</p>
            <p>Timeline:</p>
        </div>
        <div style="border: 1px solid; width: 300px; padding-top: 10px; margin-bottom: 10px; position: absolute; right: 50px; top: 230px;">
            <table id="example8" class="table table-light" style="width:100%; background-color: #ffffff">
                <tr>
                    <th colspan="2" style="text-align: center">Indicator</th>
                </tr>
                <tr>
                    <th>V</th>
                    <th>Done</th>
                </tr>
                <tr>
                    <th>1/2</th>
                    <th>Partially</th>
                </tr>
            </table>
        </div>

        <table id="example2" class="table table-striped" style="width:100%">
            <thead><tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Protected Claim</th>
                <th>Wages</th>
                <th>Claim ToDate</th>
                <th>Payment Recieved</th>
                <th></th>
                <th colspan="4">Remarks</th>
            </tr>
            <tr>
                <th>No</th>
                <th>Item Description</th>
                <th>Ref</th>
                <th>UOM</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>QTY</th>
                <th>QTY</th>
                <th>QTY</th>
                <th>QTY</th>
                <th>WorkDone Month</th>
                <th>WorkDone</th>
                <th>Claim</th>
                <th>Payment</th>
                <th>Invoice No</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1.0</td>
                <td>Preliminary & General</td>
                <td></td>
                <td>HA</td>
                <td>213</td>
                <td>8</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.1</td>
                <td>Felling & Shredding</td>
                <td></td>
                <td>Palm</td>
                <td>25603</td>
                <td>9.5</td>
                <td>28800</td>
                <td>28800</td>
                <td>20260</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr><tr>
                <td>2.1</td>
                <td>Block 03/04</td>
                <td>L1</td>
                <td>Palm</td>
                <td>4022</td>
                <td></td>
                <td>4444</td>
                <td>4444</td>
                <td>3535</td>
                <td></td>
                <td>Aug 23</td>
                <td></td>
                <td></td>
                <td></td>
                <td>04370/71</td>
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
