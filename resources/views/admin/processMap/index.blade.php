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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">PROCESS MAP | Site Track MANAGEMENT</h2>
        <table id="example2" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Process</th>
                    <th>Owner</th>
                    <th>Form/Report</th>
                    <th>remark</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>[MGM] Register new vehicle</td>
                    <td>admin</td>
                    <td>Machinery List</td>
                    <td>test remark</td>
                </tr>
                <tr>
                    <td>[MGM] Register new vehicle</td>
                    <td>admin</td>
                    <td>Machinery List</td>
                    <td>test remark</td>
                </tr>
                <tr>
                    <td>[MGM] Register new vehicle</td>
                    <td>admin</td>
                    <td>Machinery List</td>
                    <td>test remark</td>
                </tr>
                <tr>
                    <td>[MGM] Register new vehicle</td>
                    <td>admin</td>
                    <td>Machinery List</td>
                    <td>test remark</td>
                </tr>
                <tr>
                    <td>[MGM] Register new vehicle</td>
                    <td>admin</td>
                    <td>Machinery List</td>
                    <td>test remark</td>
                </tr>
                <tr>
                    <td>[MGM] Register new vehicle</td>
                    <td>admin</td>
                    <td>Machinery List</td>
                    <td>test remark</td>
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
        new DataTable('#example3');
        new DataTable('#example4');
    </script>
@endpush
