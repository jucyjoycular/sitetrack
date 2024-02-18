@extends('admin.layout.app')

@push('styles')
    <style>
        .dataTables_filter {
            float:right;
        }
        #example2_paginate {
            float: right;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <h2 class="mb-5 pb-3" style="border-bottom:1px solid #efefef;">GL Local - Ledger - Detail </h2>
        <table id="example2" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Date</th>
                <th>Ref. 1/2</th>
                <th>Description 1</th>
                <th>Description 2</th>
                <th>Tax</th>
                <th>Debit (RM)</th>
                <th>Credit (RM)</th>
                <th>Bal. (RM)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Balance B/F</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>0.00</td>
            </tr>
            <tr>
                <td>SALMAN</td>
                <td>2195.86</td>
                <td>3815.85</td>
                <td>3624.32</td>
                <td>6175.66</td>
                <td>6729.88</td>
                <td>2636.75</td>
                <td>1650</td>
            </tr>
            <tr>
                <td>SAHDAN</td>
                <td>2195.86</td>
                <td>3815.85</td>
                <td>3624.32</td>
                <td>6175.66</td>
                <td>6729.88</td>
                <td>2636.75</td>
                <td>1650</td>
            </tr>
            <tr>
                <td>KARIM</td>
                <td>2195.86</td>
                <td>3815.85</td>
                <td>3624.32</td>
                <td>6175.66</td>
                <td>6729.88</td>
                <td>2636.75</td>
                <td>1650</td>
            </tr>
            <tr>
                <td>ASWAN</td>
                <td>-</td>
                <td>-</td>
                <td>3624.32</td>
                <td>6175.66</td>
                <td>6729.88</td>
                <td>2636.75</td>
                <td>1650</td>
            </tr>
            <tr>
                <td>ABDUL KADIR</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>6729.88</td>
                <td>2636.75</td>
                <td>1650</td>
            </tr>
            <tr>
                <td>SAMSUDDIN</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>1650</td>
            </tr>
            <tr>
                <td>RUSTAM</td>
                <td>4083.33</td>
                <td>4191.66</td>
                <td>6083.33</td>
                <td>4083.33</td>
                <td>4191.66</td>
                <td>4083.33</td>
                <td>1650</td>
            </tr>
            <tr>
                <td></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>22,773.92</td>
                <td>22,773.92</td>
                <td>0.00</td>
            </tr>
            <tr>
                <td></td>
                <td>-</td>
                <td>Total</td>
                <td>-</td>
                <td>-</td>
                <td>22,773.92</td>
                <td>22,773.92</td>
                <td>0.00</td>
            </tr>
            </tbody>
        </table>
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
