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
        <h2 class="mb-5 pb-3" style="font-weight:bold; text-align: center; border-bottom:1px solid #efefef;">Estate A</h2>

        <div class="d-flex  flex-row col-12">
            <div class="col-12">
                <table id="example2" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th>BQ Qty</th>
                        <th>109000</th>
                        <th>Completed</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Projected Qty</th>
                        <th>80000</th>
                        <th>73%</th>
                    </tr>
                    <tr>
                        <th>Verified Qty</th>
                        <th>70000</th>
                        <th>64%</th>
                    </tr>
                    <tr>
                        <th>Payment Qty</th>
                        <th>50000</th>
                        <th>46%</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <h2 class="mb-5 pb-3" style="font-weight:bold; text-align: center; border-bottom:1px solid #efefef;">Diesel Usage: 3000</h2>
        <h2 class="mb-5 pb-3" style="font-weight:bold; text-align: center; border-bottom:1px solid #efefef;">Diesel Balance: 2000</h2>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        // new DataTable('#example2');
    </script>
@endpush
