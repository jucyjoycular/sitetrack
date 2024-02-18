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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">DAILY DIESEL REPORT</h2>
        <table id="example2" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Tarikh</th>
                <th>Nama</th>
                <th>Mesin ID</th>
                <th>Mesin Meter / Jam Isi</th>
                <th>Diesel / In (Liter)</th>
                <th>Diesel / Out (Liter)</th>
                <th>Diesel / Baki (Liter)</th>
                <th>Remarks</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>27/05/2023</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>10565</td>
                <td></td>
            </tr>
            <tr>
                <td>28/05/2023</td>
                <td>KARIM</td>
                <td>LYK232</td>
                <td>4748</td>
                <td></td>
                <td>168</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>28/05/2023</td>
                <td>ASWAN</td>
                <td>LYK228</td>
                <td>5402</td>
                <td></td>
                <td>148</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>28/05/2023</td>
                <td>KADIR</td>
                <td>LYK244</td>
                <td>3554</td>
                <td></td>
                <td>206</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>28/05/2023</td>
                <td>SAHDAN</td>
                <td>LYK246</td>
                <td>314</td>
                <td></td>
                <td>147</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>28/05/2023</td>
                <td>SALMAN</td>
                <td>LYK245</td>
                <td>1918</td>
                <td></td>
                <td>152</td>
                <td>9750</td>
                <td></td>
            </tr>
            <tr>
                <td>29/05/2023</td>
                <td>SAMSUDDIN</td>
                <td>LYK208</td>
                <td>15487</td>
                <td></td>
                <td>253</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>29/05/2023</td>
                <td>ASWAN</td>
                <td>LYK228</td>
                <td>5412</td>
                <td></td>
                <td>147</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>29/05/2023</td>
                <td>SALMAN</td>
                <td>LYK245</td>
                <td>1937</td>
                <td></td>
                <td>174</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>29/05/2023</td>
                <td>SAHDAN</td>
                <td>LYK246</td>
                <td>820</td>
                <td></td>
                <td>136</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>29/05/2023</td>
                <td>KARIM</td>
                <td>LYK 232</td>
                <td>4764</td>
                <td></td>
                <td>164</td>
                <td>8876</td>
                <td></td>
            </tr>
            <tr>
                <td>30/05/2023</td>
                <td>ASWAN</td>
                <td>LYK228</td>
                <td>5427</td>
                <td></td>
                <td>218</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>30/05/2023</td>
                <td>KARIM</td>
                <td>LYK232</td>
                <td>4779</td>
                <td></td>
                <td>221</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>30/05/2023</td>
                <td>KADIR</td>
                <td>LYK244</td>
                <td>3567</td>
                <td></td>
                <td>168</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>30/05/2023</td>
                <td>SAMSUDDIN</td>
                <td>LYK208</td>
                <td>15494</td>
                <td></td>
                <td>174</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>30/05/2023</td>
                <td>SALMAN</td>
                <td>LYK245</td>
                <td>1650</td>
                <td></td>
                <td>138</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>30/05/2023</td>
                <td>SAHDAN</td>
                <td>LYK246</td>
                <td>832</td>
                <td></td>
                <td>127</td>
                <td>7830</td>
                <td></td>
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
