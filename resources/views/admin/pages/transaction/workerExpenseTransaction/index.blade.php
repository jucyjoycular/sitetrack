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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Vehicle Expense Record</h2>
        <div class="container-fluid">
            <table id="example3" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Post Date</th>
                    <th>Tax Date</th>
                    <th>Ref 1</th>
                    <th>Description</th>
                    <th>Project </th>
                    <th>Description 2</th>
                    <th>Local DR</th>
                    <th>Local CR</th>
                    <th>Local Balance</th>
                    <th>Tax</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Balance B/F</td>
                    <td>---- </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>65309.65</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1/7/2023</td>
                    <td>1/7/2023</td>
                    <td>CB00043430</td>
                    <td>LIK HENG MACHINERY (BINTULU) SDN BHD </td>
                    <td>---- </td>
                    <td>TYT-52119-0K280 TWN BPR W/O SKIRT HOLE</td>
                    <td>600</td>
                    <td>0</td>
                    <td>65909.65</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1/7/2023</td>
                    <td>1/7/2023</td>
                    <td>CS-024194 </td>
                    <td>GUANHEN TYRE SERVICES SDN BHD (1155347-A)</td>
                    <td>---- </td>
                    <td>265/70R15 WESTLAKE A/T SL 369 (M) </td>
                    <td>1570</td>
                    <td>0</td>
                    <td>67479.65</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3/7/2023</td>
                    <td>3/7/2023</td>
                    <td>CS-024204</td>
                    <td>GUANHEN TYRE SERVICES SDN BHD (1155347-A)</td>
                    <td>---- </td>
                    <td>DIN72L CAMEL MF BATTERY (M) 57238L/DIN66L </td>
                    <td>430</td>
                    <td>0</td>
                    <td>67909.65</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4/7/2023</td>
                    <td>4/7/2023</td>
                    <td>CSB022901</td>
                    <td>KM MOBIL SDN. BHD.</td>
                    <td>---- </td>
                    <td>FUEL FILTER RT50 (LOWER) </td>
                    <td>381.9</td>
                    <td>0</td>
                    <td>68291.55</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4/7/2023</td>
                    <td>4/7/2023</td>
                    <td>IV-11132</td>
                    <td>LH AUTO PARTS COMPANY </td>
                    <td>---- </td>
                    <td>VIGO REAR MAMBO (R)</td>
                    <td>2200</td>
                    <td>0</td>
                    <td>70491.55</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5/7/2023</td>
                    <td>5/7/2023</td>
                    <td>379V107426</td>
                    <td>BOULEVARD MOTOR SDN BHD (1227340-v)</td>
                    <td>---- </td>
                    <td>W405L SS DIESEL MGRADE 5L </td>
                    <td>470.98</td>
                    <td>0</td>
                    <td>70962.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5/7/2023</td>
                    <td>5/7/2023</td>
                    <td>CB00043520</td>
                    <td>LIK HENG MACHINERY (BINTULU) SDN BHD </td>
                    <td>---- </td>
                    <td>TYT-43430-0K020 FDG DRIVE SHAFT</td>
                    <td>703</td>
                    <td>0</td>
                    <td>71665.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5/7/2023</td>
                    <td>5/7/2023</td>
                    <td>CB00043522</td>
                    <td>LIK HENG MACHINERY (BINTULU) SDN BHD </td>
                    <td>---- </td>
                    <td>TYT-48810-0K010 555 LINK, STABILIZER LH </td>
                    <td>170</td>
                    <td>0</td>
                    <td>71835.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5/7/2023</td>
                    <td>5/7/2023</td>
                    <td>CS 19794</td>
                    <td>MULTIPROKIT PARTS SDN BHD </td>
                    <td>---- </td>
                    <td>AIR COND FILTER </td>
                    <td>38</td>
                    <td>0</td>
                    <td>71873.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5/7/2023</td>
                    <td>5/7/2023</td>
                    <td>I-2307/0153</td>
                    <td>BEARING &amp; PARTS (SARAWAK) SDN BHD</td>
                    <td>---- </td>
                    <td>HTC 43 X 58 X 8L TY HILUX 3.0, KUN26 </td>
                    <td>39</td>
                    <td>0</td>
                    <td>71912.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6/7/2023</td>
                    <td>6/7/2023</td>
                    <td>PC 2023/07/001</td>
                    <td>S.B.POUNCE ENTERPRISE - 20.06.23 </td>
                    <td>---- </td>
                    <td></td>
                    <td>40</td>
                    <td>0</td>
                    <td>71952.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6/7/2023</td>
                    <td>6/7/2023</td>
                    <td>PC 2023/07/004</td>
                    <td>UNIQUE AUTO AIR-COND SERVICE CENTRE - 23049 - 30.06.23 </td>
                    <td>S001 </td>
                    <td></td>
                    <td>230</td>
                    <td>0</td>
                    <td>72182.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6/7/2023</td>
                    <td>6/7/2023</td>
                    <td>PC 2023/07/005</td>
                    <td>KAWAN MOTOR COMAPNY - 126963 - 30.06.23 </td>
                    <td>S27 </td>
                    <td></td>
                    <td>60</td>
                    <td>0</td>
                    <td>72242.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6/7/2023</td>
                    <td>6/7/2023</td>
                    <td>PC 2023/07/005</td>
                    <td>KAWAN MOTOR COMAPNY - 126962 - 27.06.23 </td>
                    <td>---- </td>
                    <td></td>
                    <td>132</td>
                    <td>0</td>
                    <td>72374.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6/7/2023</td>
                    <td>6/7/2023</td>
                    <td>PC 2023/07/022</td>
                    <td>HI-TECH TYRE &amp; ALIGNMENT SERVICES SDN BHD - 30.06.23</td>
                    <td>---- </td>
                    <td></td>
                    <td>20</td>
                    <td>0</td>
                    <td>72394.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6/7/2023</td>
                    <td>6/7/2023</td>
                    <td>PC 2023/07/022 </td>
                    <td>HI-TECH TYRE &amp; ALIGNMENT SERVICES SDN BHD - 01.07.23</td>
                    <td>---- </td>
                    <td></td>
                    <td>370</td>
                    <td>0</td>
                    <td>72764.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6/7/2023</td>
                    <td>6/7/2023</td>
                    <td>PC 2023/07/023</td>
                    <td>E &amp; J TRADING COMAPNY - 18406 - 12.04.23 </td>
                    <td>---- </td>
                    <td></td>
                    <td>1146</td>
                    <td>0</td>
                    <td>73910.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6/7/2023</td>
                    <td>6/7/2023</td>
                    <td>PC 2023/07/023</td>
                    <td>E &amp; J TRADING COMAPNY - 18405 - 02.05.23 </td>
                    <td>---- </td>
                    <td></td>
                    <td>723</td>
                    <td>0</td>
                    <td>74633.53</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>9323.88</td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>9323.88</td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>

            <div>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">-------------------------------------------------</h3><br/>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">Note:                        </h3><br/>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">JT = JOURNAL TYRE      G = GENERAL LEDGER</h3><br/>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">B = BANK               P = PURCHASE LEDGER</h3><br/>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">C = CASH/ PETTY CASH   S = SALES LEDGER</h3><br/>
                <h3 class="mb-2" style="margin-bottom:12px; width:100%;text-align:center;font-weight:bold;">-------------------------------------------------</h3><br/>
            </div>
        </div>
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
