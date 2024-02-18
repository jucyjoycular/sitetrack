@extends('admin.layout.app')

@push('styles')
    <style>
        .dataTables_filter {
            float:right;
        }
        #example9_paginate {
            float: right;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Salary for PIC</h2>
        <div class="container-fluid" style="width: 1000px; padding-top: 10px; margin-top: -55px;">
            <table id="example8" class="table table-light" style="width:100%">
                <tr>
                    <th>KOD PEKERJA: </th>
                    <th>TEMPAY BERKERJA: </th>
                </tr>
                <tr>
                    <th>Name: Sime Darby </th>
                    <th>MESIN: T123</th>
                </tr>
                <tr>
                    <th>K.P/Passport: GJ8796K</th>
                    <th>TARIKH: 31/12/2023</th>
                </tr>
            </table>
        </div>
        <br/>
        <div class="container-fluid" style="margin-top: -20px;">
{{--            <div class="d-flex flex-row float-right" >--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-md-12" >--}}
{{--                        <div style="width:100px; margin-top:1px; z-index:9999;">--}}
{{--                            <a href="#" class="btn btn-primary" style="width: 100px; height: 42px; font-size: large;">Print</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row justify-content-center" style="margin-left: 0px;">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div style="width:100px; margin-top:1px; z-index:9999;">--}}
{{--                            <a href="#" class="btn btn-primary" style="width: 100px; height: 42px; font-size: large;">Print</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <table id="example9" class="table table-striped" style="width:100%">
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

            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-primary" style="width: 100px; height: 42px; font-size: large;">Print</a>
                <a href="#" class="btn btn-primary" style="width: 100px; height: 42px; font-size: large; margin-left: 20px;">Export</a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example9');
    </script>
@endpush
