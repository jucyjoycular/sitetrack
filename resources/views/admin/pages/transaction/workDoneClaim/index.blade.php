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
        .table thead th{
            border: 1px solid;
            text-align: center;
        }
        .table thead tp{
            border: 1px solid;
            text-align: left;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">WORK DONE For Claim</h2>
        <div style="border: 1px solid; width: 300px; padding-top: 10px; margin-top: -40px;">
            <p style="border-bottom: 1px solid">Month: 10 / 2023</p>
            <p style="border-bottom: 1px solid">Block: 2023 A/B</p>
            <p style="border-bottom: 1px solid">Client: Sime Darby </p>
            <p style="border-bottom: 1px solid">Estate: Takau Estate</p>
            <p style="border-bottom: 1px solid">Surveyor: Janter</p>
            <p>Contractor: LYK Hong & Sons Realty Sdn. Bhd.</p>
        </div>
        <br>
        <table id="example2" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th></th>
                    <th colspan="5">Driver</th>
                    <th colspan="5"></th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Edi</th>
                    <th>Galau</th>
                    <th>Damak</th>
                    <th>Naim</th>
                    <th>Dahardi</th>
                    <th>Description of Work</th>
                    <th>UOM</th>
                    <th>Block</th>
                    <th></th>
                    <th>Remarks</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>589.98</td>
                    <td></td>
                    <td>366.41</td>
                    <td>47.11</td>
                    <td>368.44</td>
                    <td>New Field Drain</td>
                    <td>m</td>
                    <td>2023B</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>589.98</td>
                    <td>0.0</td>
                    <td>366.41</td>
                    <td>47.11</td>
                    <td>368.44</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Total</td>
                    <td>1371.94</td>
                    <td>-</td>
                </tr><tr>
                    <td>2</td>
                    <td>607.31</td>
                    <td></td>
                    <td>925.28</td>
                    <td></td>
                    <td>75.25</td>
                    <td>New Collection Drain</td>
                    <td>m</td>
                    <td>2023B</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>607.31</td>
                    <td>0.0</td>
                    <td>925.28</td>
                    <td>0.0</td>
                    <td>75.25</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Total</td>
                    <td>1607.84</td>
                    <td>-</td>
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
