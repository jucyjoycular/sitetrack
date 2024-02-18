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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Site Details</h2>
        <table id="example2" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>CheckBox</th>
                    <th>Work Description Activity</th>
                    <th>UOM Activity</th>
                    <th>Estimate Quantity</th>
                    <th>Job Rate / RM</th>
                    <th>Contract Rate</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>Feeling & Chipping / Cincang</p>
                        <p>Block 98</p>
                        <p>Block 98</p>
                        <p>Block 97</p>
                        <p>Block 96</p>
                        <p>Block 95</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td style="color:red;">
                        <p>Meter</p>
                        <p>Meter</p>
                        <p>Meter</p>
                        <p>Meter</p>
                        <p>Meter</p>
                        <p>Meter</p>
                    </td>
                    <td style="color:red;">
                        <p><input type="number" value="1000" /></p>
                        <p><input type="number" value="1000" /></p>
                        <p><input type="number" value="1000" /></p>
                        <p><input type="number" value="1000" /></p>
                        <p><input type="number" value="1000" /></p>
                        <p><input type="number" value="1000" /></p>
                    </td>
                    <td style="color:red;">
                        <p><input type="number" value="24" /></p>
                        <p><input type="number" value="24" /></p>
                        <p><input type="number" value="24" /></p>
                        <p><input type="number" value="24" /></p>
                        <p><input type="number" value="24" /></p>
                        <p><input type="number" value="24" /></p>
                    </td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>Deboling / Korek Lobang</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td>
                        <p>Meter</p>
                    </td>
                    <td><input type="number" value="1000" /></td>
                    <td><input type="number" value="24" /></td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>Stacking & clearing & levelling / Stacking</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td>
                        <p>Meter</p>
                    </td>
                    <td><input type="number" value="1000" /></td>
                    <td><input type="number" value="24" /></td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>Feeling & Chipping / Cincang</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td>
                        <p>HR</p>
                    </td>
                    <td><input type="number" value="1000" /></td>
                    <td><input type="number" value="24" /></td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>Holing / Cucok Lobang</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td>
                        <p>-</p>
                    </td>
                    <td><input type="number" value="5000" /></td>
                    <td><input type="number" value="24" /></td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>Planting Platform / Bikin Platform</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td>
                        <p>-</p>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>CECT / Parit Sampah</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td>
                        <p>-</p>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>Cambering / Camber</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td>
                        <p>-</p>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>Compaction / Kompak</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td>
                        <p>-</p>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>Planting Bund / Bikin Bund</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td>
                        <p>-</p>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>
                        <p>Repair Terraces / Repair Teres</p>
                        <button class="btn btn-sm btn-info">add new block</button>
                    </td>
                    <td>
                        <p>-</p>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>1000</td>
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
