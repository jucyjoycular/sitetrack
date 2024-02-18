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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Monthly Summary Project Cost</h2>
        <div class="container-fluid">
            <table id="example3" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>NAME</th>
                    <th>BULAN</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th>SEPT&#39;22</th>
                    <th>OCT &#39;22</th>
                    <th>NOV&#39;22</th>
                    <th>DEC&#39;22</th>
                    <th>JAN&#39;23</th>
                    <th>FEB &#39;23</th>
                    <th>MARCH&#39;23</th>
                    <th>APRIL&#39;23</th>
                    <th>MAY&#39;23</th>
                    <th>JUNE &#39;23</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>NAIM</td>
                    <td>627.90</td>
                    <td>5,383.46</td>
                    <td>1,145.50</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>SALMAN</td>
                    <td>2,195.86</td>
                    <td>3,815.85</td>
                    <td>3,624.32</td>
                    <td>6,175.66</td>
                    <td>6,729.88</td>
                    <td>2,636.75</td>
                    <td>1,650.00</td>
                    <td>8,931.61</td>
                    <td>7,270.00</td>
                    <td>7,586.79</td>
                </tr>
                <tr>
                    <td>SAHDAN</td>
                    <td>6,160.64</td>
                    <td>7,277.74</td>
                    <td>7,665,69</td>
                    <td>4,970.55</td>
                    <td>6,824.45</td>
                    <td>1,801.96</td>
                    <td>813.50</td>
                    <td>2,279.83</td>
                    <td>7,249.84</td>
                    <td>7,923.76</td>
                </tr>
                <tr>
                    <td>KARIM</td>
                    <td>-</td>
                    <td>-</td>
                    <td>4,804.50</td>
                    <td>3,812.70</td>
                    <td>5,417.46</td>
                    <td>3,730.80</td>
                    <td>2,107.30</td>
                    <td>6,096.95</td>
                    <td>6,136.83</td>
                    <td>5,471.97</td>
                </tr>
                <tr>
                    <td>ASWAN</td>
                    <td>-</td>
                    <td>-</td>
                    <td>2,524.50</td>
                    <td>4,621.86</td>
                    <td>5,333.52</td>
                    <td>8,658.11</td>
                    <td>-</td>
                    <td>6,847.30</td>
                    <td>7,501.18</td>
                    <td>5,752.26</td>
                </tr>
                <tr>
                    <td>ABDUL KADIR</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>3,783.00</td>
                    <td>6,266.30</td>
                    <td>2,107.30</td>
                    <td>5,943.87</td>
                    <td>5,617.53</td>
                    <td>1,833.24</td>
                </tr>
                <tr>
                    <td>SAMSUDDIN</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>3,012.39</td>
                    <td>7,819.88</td>
                    <td>4,260.10</td>
                    <td>4,224.42</td>
                </tr>
                <tr>
                    <td>RUSTAM</td>
                    <td>4,083.33</td>
                    <td>4,191.66</td>
                    <td>6,083.33</td>
                    <td>4,083.33</td>
                    <td>4,191.66</td>
                    <td>4,083.33</td>
                    <td>4,083.33</td>
                    <td>4,191.66</td>
                    <td>4,383.33</td>
                    <td>4,083.33</td>
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
        new DataTable('#example2');
        new DataTable('#example3');
        new DataTable('#example4');
    </script>
@endpush
