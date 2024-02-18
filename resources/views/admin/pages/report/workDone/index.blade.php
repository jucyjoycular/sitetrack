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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">WORK DONE</h2>
        <table id="example2" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Item Description</th>
                    <th>Ref</th>
                    <th>UOM</th>
                    <th>Quantity</th>
                    <th>Contract QTY</th>
                    <th>CLAIM TODATE QTY</th>
                    <th>PAYMENT RECEIVE QTY</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Felling/ Shredding Block 0101</td>
                    <td>H1</td>
                    <td>PALM</td>
                    <td>42201</td>
                    <td>33536</td>
                    <td>36080</td>
                    <td><input type="text" placeholder="23474"></td>
                    <td><input type="text" placeholder="23474"></td>
                </tr>
                <tr>
                    <td>Felling/ Shredding Block 0101</td>
                    <td>H1</td>
                    <td>PALM</td>
                    <td>42201</td>
                    <td>33536</td>
                    <td>36080</td>
                    <td><input type="text" placeholder="23474"></td>
                    <td><input type="text" placeholder="23474"></td>
                </tr>
                <tr>
                    <td>Felling/ Shredding Block 0101</td>
                    <td>H1</td>
                    <td>PALM</td>
                    <td>42201</td>
                    <td>33536</td>
                    <td>36080</td>
                    <td><input type="text" placeholder="23474"></td>
                    <td><input type="text" placeholder="23474"></td>
                </tr>
                <tr>
                    <td>Felling/ Shredding Block 0101</td>
                    <td>H1</td>
                    <td>PALM</td>
                    <td>42201</td>
                    <td>33536</td>
                    <td>36080</td>
                    <td><input type="text" placeholder="23474"></td>
                    <td><input type="text" placeholder="23474"></td>
                </tr>
                <tr>
                    <td>Felling/ Shredding Block 0101</td>
                    <td>H1</td>
                    <td>PALM</td>
                    <td>42201</td>
                    <td>33536</td>
                    <td>36080</td>
                    <td><input type="text" placeholder="23474"></td>
                    <td><input type="text" placeholder="23474"></td>
                </tr>
                <tr>
                    <td>Felling/ Shredding Block 0101</td>
                    <td>H1</td>
                    <td>PALM</td>
                    <td>42201</td>
                    <td>33536</td>
                    <td>36080</td>
                    <td><input type="text" placeholder="23474"></td>
                    <td><input type="text" placeholder="23474"></td>
                </tr>
                <tr>
                    <td>Felling/ Shredding Block 0101</td>
                    <td>H1</td>
                    <td>PALM</td>
                    <td>42201</td>
                    <td>33536</td>
                    <td>36080</td>
                    <td><input type="text" placeholder="23474"></td>
                    <td><input type="text" placeholder="23474"></td>
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
