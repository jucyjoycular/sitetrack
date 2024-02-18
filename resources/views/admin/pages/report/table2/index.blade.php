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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">SUMMARY Table 1</h2>
        <table id="example2" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Activity</th>
                    <th>Task</th>
                    <th>Mesin ID</th>
                    <th>Diesel In</th>
                    <th>Diesel Out</th>
                    <th>Site</th>
                    <th>Block</th>
                    <th>Working Hours</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>11/11/2023</td>
                    <td>Karim</td>
                    <td>Daily Activity</td>
                    <td>Repairing</td>
                    <td>LYK255</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>M1</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Sahdam</td>
                    <td>Fuel Transfer</td>
                    <td>Issue to Machine</td>
                    <td>LYK244</td>
                    <td></td>
                    <td>998</td>
                    <td></td>
                    <td>M1</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Kadir</td>
                    <td>Fuel Transfer</td>
                    <td>Issue to Site</td>
                    <td></td>
                    <td></td>
                    <td>2356</td>
                    <td>Melacca</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Kadir</td>
                    <td>Daily Activity</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>M1</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Naim</td>
                    <td>Fuel Transfer</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>1123</td>
                    <td></td>
                    <td>M1</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>12/11/2023</td>
                    <td>Karim</td>
                    <td>Fuel Transfer</td>
                    <td>Issue to Other Site</td>
                    <td></td>
                    <td></td>
                    <td>3111</td>
                    <td>Kaula Lumpur</td>
                    <td></td>
                    <td>8</td>
                </tr><tr>
                    <td></td>
                    <td>Shadam</td>
                    <td>Daily Activity</td>
                    <td>Repairing</td>
                    <td>LYK238</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>M1</td>
                    <td>8</td>
                </tr><tr>
                    <td></td>
                    <td>Kadir</td>
                    <td>Daily Activity</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>M1</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Naim</td>
                    <td>Daily Activity</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>M1</td>
                    <td>8</td>
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
