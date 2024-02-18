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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">SUMMARY DIESEL REPORT</h2>
        <table id="example2" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Activity</th>
                    <th>Quantity</th>
                    <th>Vom</th>
                    <th>Block</th>
                    <th>Task</th>
                    <th>Working Hours</th>
                    <th>Wages by Activity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>11/11/2023</td>
                    <td>Salman</td>
                    <td>Feling & Chiping</td>
                    <td>111</td>
                    <td>Palm</td>
                    <td>M1</td>
                    <td></td>
                    <td>4</td>
                    <th>RM 2.78</th>
                </tr>
                <tr>
                    <td>11/11/2023</td>
                    <td>Salman</td>
                    <td>Debling</td>
                    <td>215</td>
                    <td>Bole</td>
                    <td>M23</td>
                    <td></td>
                    <td>2</td>
                    <th>RM 5.38</th>
                </tr>
                <tr>
                    <td>11/11/2023</td>
                    <td>Salman</td>
                    <td>Leveling</td>
                    <td>0.5</td>
                    <td>HA</td>
                    <td>M13</td>
                    <td></td>
                    <td>2</td>
                    <th>RM 1.67</th>
                </tr>
                <tr>
                    <td>11/11/2023</td>
                    <td>Samsuddin</td>
                    <td>Debling</td>
                    <td>215</td>
                    <td>Bole</td>
                    <td>M1</td>
                    <td></td>
                    <td>4</td>
                    <th>RM 2.69</th>
                </tr>
                <tr>
                    <td>11/11/2023</td>
                    <td>Samsuddin</td>
                    <td>Debling</td>
                    <td>198</td>
                    <td>Palm</td>
                    <td>M1</td>
                    <td></td>
                    <td>4</td>
                    <th>RM 4.95</th>
                </tr>
                <tr>
                    <td>11/11/2023</td>
                    <td>Samsuddin</td>
                    <td>Feling & Chipping</td>
                    <td>315</td>
                    <td>HA</td>
                    <td>M1</td>
                    <td></td>
                    <td>6</td>
                    <th>RM 7.88</th>
                </tr>
                <tr>
                    <td>11/11/2023</td>
                    <td>Rustam</td>
                    <td>Debling</td>
                    <td>145</td>
                    <td>Bole</td>
                    <td>M13</td>
                    <td></td>
                    <td>4</td>
                    <th>RM 3.63</th>
                </tr>
                <tr>
                    <td>11/11/2023</td>
                    <td>Aswan</td>
                    <td>Stacking</td>
                    <td>0.2</td>
                    <td>HA</td>
                    <td>M23</td>
                    <td></td>
                    <td>5</td>
                    <th>RM 1.67</th>
                </tr>
                <tr>
                    <td>11/11/2023</td>
                    <td>Aswan</td>
                    <td>Feling & Chipping</td>
                    <td>219</td>
                    <td>Palm</td>
                    <td>M1</td>
                    <td></td>
                    <td>3</td>
                    <th>RM 2.74</th>
                </tr>
                <tr>
                    <td>12/11/2023</td>
                    <td>Salman</td>
                    <td>Feling & Chipping</td>
                    <td>212</td>
                    <td>Palm</td>
                    <td>M13</td>
                    <td></td>
                    <td>8</td>
                    <th>RM 5.3</th>
                </tr>
                <tr>
                    <td>12/11/2023</td>
                    <td>Salman</td>
                    <td>Rosak</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td></td>
                    <td>-</td>
                    <th></th>
                </tr>
                <tr>
                    <td>12/11/2023</td>
                    <td>Samsuddin</td>
                    <td>Debelingg</td>
                    <td>245</td>
                    <td>Bole</td>
                    <td>M1</td>
                    <td></td>
                    <td>2</td>
                    <th>RM 3.06</th>
                </tr>
                <tr>
                    <td>12/11/2023</td>
                    <td>Samsuddin</td>
                    <td>Stacking</td>
                    <td>0.2</td>
                    <td>HA</td>
                    <td>M23</td>
                    <td></td>
                    <td>4</td>
                    <th>RM 1.67</th>
                </tr>
                <tr>
                    <td>12/11/2023</td>
                    <td>Samsuddin</td>
                    <td>Feling & Chipping</td>
                    <td>145</td>
                    <td>Palm</td>
                    <td>M1</td>
                    <td></td>
                    <td>2</td>
                    <th>RM 3.63</th>
                </tr>
                <tr>
                    <td>12/11/2023</td>
                    <td>Rustam</td>
                    <td>Feling & Chipping</td>
                    <td>229</td>
                    <td>Palm</td>
                    <td>M1</td>
                    <td></td>
                    <td>8</td>
                    <th>RM 5.73</th>
                </tr>
                <tr>
                    <td>12/11/2023</td>
                    <td>Asawan</td>
                    <td>Feling & Chipping</td>
                    <td>223</td>
                    <td>Palm</td>
                    <td>M1</td>
                    <td></td>
                    <td>8</td>
                    <th>RM 5.58</th>
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
