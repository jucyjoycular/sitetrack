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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Salary for PIC</h2>

        <div class="container-fluid" >
            <table id="example3" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="4">RM Amount Sent</th>
                </tr>
                <tr>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th colspan="2">Unit Price</th>
                    <th colspan="2">DR (+)</th>
                    <th >CR (-)</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Salary For Oct'23</td>
                    <td><input type="text" value="1" /></td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Compaction M1(04/06) 9.07</td>
                    <td><input type="text" value="-" /></td>
                    <td></td>
                    <td></td>
                    <td>453</td>
                    <td>50</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Compaction M1(04/07) 12.15</td>
                    <td><input type="text" value="-" /></td>
                    <td></td>
                    <td></td>
                    <td>607</td>
                    <td>50</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Compaction M1(04/08) 16.19</td>
                    <td><input type="text" value="-" /></td>
                    <td></td>
                    <td></td>
                    <td>453</td>
                    <td>50</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Motor RM3000 (Ref slip:6476)(Bal: RM2500)</td>
                    <td><input type="text" value="2" /></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>500</td>
                    <td>0.0</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" value="-" /></td>
                    <td>Total RM</td>
                    <td></td>
                    <td>6887.01</td>
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
