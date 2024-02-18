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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Compare Operator Mechanic Transaction</h2>
        <table id="example2" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Date</th>
                <th>Site</th>
                <th>MESIN ID</th>
                <th>Operator</th>
                <th>Mechanic</th>
                <th>Op. Fuel</th>
                <th>Mec. Fuel</th>
                <th>Variance</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>11/11/2023</td>
                <td>Site 1</td>
                <td>T07</td>
                <td>Karim</td>
                <td>John</td>
                <td>213</td>
                <td>170</td>
                <td>43</td>
            </tr>
            <tr>
                <td>11/11/2023</td>
                <td>Site 1</td>
                <td>T07</td>
                <td>Karim</td>
                <td>John</td>
                <td>213</td>
                <td>170</td>
                <td>43</td>
            </tr>
            <tr>
                <td>11/11/2023</td>
                <td>Site 1</td>
                <td>T07</td>
                <td>Karim</td>
                <td>John</td>
                <td>213</td>
                <td>170</td>
                <td>43</td>
            </tr>
            <tr>
                <td>11/11/2023</td>
                <td>Site 1</td>
                <td>T07</td>
                <td>Karim</td>
                <td>John</td>
                <td>213</td>
                <td>170</td>
                <td>43</td>
            </tr>
            <tr>
                <td>11/11/2023</td>
                <td>Site 1</td>
                <td>T07</td>
                <td>Karim</td>
                <td>John</td>
                <td>213</td>
                <td>170</td>
                <td>43</td>
            </tr>
            <tr>
                <td>11/11/2023</td>
                <td>Site 1</td>
                <td>T07</td>
                <td>Karim</td>
                <td>John</td>
                <td>213</td>
                <td>170</td>
                <td>43</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div style="margin-left: 800px;">
        <a href="#" class="btn btn-primary" style="width: 100px; height: 42px; font-size: large;">Print</a>
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
