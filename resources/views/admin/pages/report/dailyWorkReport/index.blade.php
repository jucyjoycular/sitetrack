@extends('admin.layout.app')

@push('styles')
    <style>
        .dataTables_filter {
            float:right;
        }
        #example1_paginate {
            float: right;
        }
        #example2_paginate {
            float: right;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <h2 class="mb-5 pb-3" style="border-bottom:1px solid #efefef;">DAILY WORK REPORT</h2>

        <table id="example1" class="table table-striped text-center" style="width:100%">
            <thead>
            <tr>
                <th >NO</th>
                <th>MESIN</th>
                <th>OPERATOR</th>
                <th colspan="10">JAM BEKERJA</th>
                <th>MINYAK</th>
                <th colspan="2">INFORMASI KERJA</th>
                <th colspan="2">INFORMASI SERVIS</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="5">PAGI</th>
                <th colspan="5">PETANG</th>
                <th></th>
                <th>JENIS KERJA</th>
                <th>KUANTITI</th>
                <th>STATUS</th>
                <th>TEMPOH MENUNGGU</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="5">7.00 PG- 12.00 PG</th>
                <th colspan="5">1.00 PETANG - 6.00 PTG</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td >1</td>
                <td>245</td>
                <td>SALMAN</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>100</td>
                <td>Bikin parit CECT</td>
                <td>900</td>
                <td>meter</td>
                <td>M3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>208</td>
                <td>SAMSUDDIN</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>141</td>
                <td>Chipping</td>
                <td>200</td>
                <td>pokok</td>
                <td>L8</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td></td>
                <td>akar</td>
                <td>31</td>
                <td></td>
                <td>L8</td>
            </tr>
            <tr>
                <td>3</td>
                <td>232</td>
                <td>KARIM</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>241</td>
                <td>Chipping</td>
                <td>244</td>
                <td>pokok</td>
                <td>L1</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td></td>
                <td>akar</td>
                <td>22</td>
                <td></td>
                <td>L1</td>
            </tr>
            <tr>
                <td>4</td>
                <td>228</td>
                <td>ASWAN</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>183</td>
                <td>Chipping</td>
                <td>282</td>
                <td>pokok</td>
                <td>L9</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td></td>
                <td>akar</td>
                <td>48</td>
                <td></td>
                <td>L9</td>
            </tr>
            <tr>
                <td>5</td>
                <td>246</td>
                <td>SAHDAN</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>157</td>
                <td>Stacking</td>
                <td>8</td>
                <td>lorong</td>
                <td>J8</td>
            </tr>
            <tr>
                <td>6</td>
                <td>244</td>
                <td>KADIR</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>-</td>
                <td>Rosak</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <h2 class="mb-5 pb-3" style="border-bottom:1px solid #efefef;">DAILY WORK REPORT</h2>
        <h3 class="mb-5 pb-3" style="border-bottom:1px solid #efefef;">LYK HONG AND SONS REALTY SDN BHD</h3>
        <table id="example2" class="table table-striped text-center" style="width:100%">
            <thead>
            <tr>
                <th >NO</th>
                <th>MESIN</th>
                <th>OPERATOR</th>
                <th colspan="10">JAM BEKERJA</th>
                <th>MINYAK</th>
                <th colspan="2">INFORMASI KERJA</th>
                <th colspan="2">INFORMASI SERVIS</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="5">PAGI</th>
                <th colspan="5">PETANG</th>
                <th></th>
                <th>JENIS KERJA</th>
                <th>KUANTITI</th>
                <th>STATUS</th>
                <th>TEMPOH MENUNGGU</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="5">7.00 PG- 12.00 PG</th>
                <th colspan="5">1.00 PETANG - 6.00 PTG</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>208</td>
                <td>SAMSUDDIN</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>147</td>
                <td>Chipping</td>
                <td>270</td>
                <td>pokok</td>
                <td>L8</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td></td>
                <td>Akar</td>
                <td>27</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>245</td>
                <td>SALMAN</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>136</td>
                <td>Bikin parit CECT</td>
                <td>600</td>
                <td>meter</td>
                <td>m2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>232</td>
                <td>KARIM</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>-</td>
                <td>Chipping</td>
                <td>239</td>
                <td>pokok</td>
                <td>L1</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td></td>
                <td>akar</td>
                <td>25</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
                <td>228</td>
                <td>ASWAN</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>179</td>
                <td>Chipping</td>
                <td>262</td>
                <td>pokok</td>
                <td>L9</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td></td>
                <td>akar</td>
                <td>35</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5</td>
                <td>246</td>
                <td>SAHDAN</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>131</td>
                <td>Stacking</td>
                <td>8</td>
                <td>lorong</td>
                <td>J10</td>
            </tr>
            <tr>
                <td>6</td>
                <td>244</td>
                <td>KADIR</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>-</td>
                <td>Rosak</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
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
        new DataTable('#example1');
    </script>
@endpush