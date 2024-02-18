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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Operator Deduction</h2>

        <div class="container-fluid" >
            <table id="example3" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Month</th>
                    <th>Name</th>
                    <th>Activity</th>
                    <th>Quantity Total</th>
                    <th>Wages Total by Activity</th>
                    <th>Gross Total</th>
                    <th>Deduction Detail</th>
                    <th>Deduction Total</th>
                    <th>Nett Wages</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Oct</td>
                    <td>Salman</td>
                    <td>Feling &amp; Chipping</td>
                    <td>434</td>
                    <td>RM 21.70</td>
                    <td>RM 183.05</td>
                    <td>Rokok</td>
                    <td>RM 55.00</td>
                    <td>RM 128.05</td>
                </tr>
                <tr>
                    <td>Oct</td>
                    <td>Salman</td>
                    <td>Deboling</td>
                    <td>430</td>
                    <td>RM 10.75</td>
                    <td></td>
                    <td>Meal</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Oct</td>
                    <td>Salman</td>
                    <td>Stacking</td>
                    <td>0.3</td>
                    <td>RM 5.00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Oct</td>
                    <td>Salman</td>
                    <td>CECT</td>
                    <td>2912</td>
                    <td>RM 145.60</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Oct</td>
                    <td>Samsuddin</td>
                    <td>Feling &amp; Chipping</td>
                    <td>541</td>
                    <td>RM 27.05</td>
                    <td>RM 60.82</td>
                    <td></td>
                    <td></td>
                    <td>RM 60.82</td>
                </tr>
                <tr>
                    <td>Oct</td>
                    <td>Samsuddin</td>
                    <td>Deboling</td>
                    <td>675</td>
                    <td>RM 33.75</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Oct</td>
                    <td>Samsuddin</td>
                    <td>Stacking</td>
                    <td>0.3</td>
                    <td>RM 0.02</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Oct</td>
                    <td>Rustam</td>
                    <td>Feling &amp; Chipping</td>
                    <td>909</td>
                    <td>RM 45.45</td>
                    <td>RM 45.45</td>
                    <td></td>
                    <td></td>
                    <td>RM 45.45</td>
                </tr>
                <tr>
                    <td>Oct</td>
                    <td>Aswan</td>
                    <td>Feling &amp; Chipping</td>
                    <td>1107</td>
                    <td>RM 55.35</td>
                    <td>RM 55.38</td>
                    <td></td>
                    <td></td>
                    <td>RM 55.38</td>
                </tr>
                <tr>
                    <td>Oct</td>
                    <td>Aswan</td>
                    <td>Stacking</td>
                    <td>0.6</td>
                    <td>RM 0.03</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nov</td>
                    <td>Salman</td>
                    <td>Feling &amp; Chipping</td>
                    <td>858</td>
                    <td>RM 42.90</td>
                    <td>RM 270.70</td>
                    <td>Meal</td>
                    <td>RM 15.00</td>
                    <td>RM 255.70</td>
                </tr>
                <tr>
                    <td>Nov</td>
                    <td>Salman</td>
                    <td>Deboling</td>
                    <td>430</td>
                    <td>RM 10.75</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nov</td>
                    <td>Salman</td>
                    <td>Stacking</td>
                    <td>0.3</td>
                    <td>RM 5.00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nov</td>
                    <td>Salman</td>
                    <td>CECT</td>
                    <td>4241</td>
                    <td>RM 212.05</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nov</td>
                    <td>Samsuddin</td>
                    <td>Feling &amp; Chipping</td>
                    <td>844</td>
                    <td>RM 42.20</td>
                    <td>RM 100.50</td>
                    <td>Meal</td>
                    <td>RM 35.00</td>
                    <td>RM 65.50</td>
                </tr>
                <tr>
                    <td>Nov</td>
                    <td>Samsuddin</td>
                    <td>Deboling</td>
                    <td>1165</td>
                    <td>RM 58.25</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nov</td>
                    <td>Samsuddin</td>
                    <td>Stacking</td>
                    <td>0.9</td>
                    <td>RM 0.05</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nov</td>
                    <td>Rustam</td>
                    <td>Feling &amp; Chipping</td>
                    <td>1467</td>
                    <td>RM 73.35</td>
                    <td>RM 73.35</td>
                    <td></td>
                    <td></td>
                    <td>RM 73.35</td>
                </tr>
                <tr>
                    <td>Nov</td>
                    <td>Aswan</td>
                    <td>Feling &amp; Chipping</td>
                    <td>2445</td>
                    <td>RM 122.25</td>
                    <td>RM 122.28</td>
                    <td></td>
                    <td></td>
                    <td>RM 122.28</td>
                </tr>
                <tr>
                    <td>Nov</td>
                    <td>Aswan</td>
                    <td>Stacking</td>
                    <td>0.6</td>
                    <td>RM 0.03</td>
                    <td></td>
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

    </script>
@endpush
