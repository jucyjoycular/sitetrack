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
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Operator Mechanic app-daily output report list</h2>
        <table id="example2" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Action</th>
                <th>Date</th>
                <th>Name</th>
                <th>Activity</th>
                <th>Quantity</th>
                <th>UOM</th>
                <th>Block</th>
                <th>Task</th>
                <th>Work start</th>
                <th>Work end</th>
                <th>Mesin ID</th>
                <th>Fuel</th>
                <th>Wages by activity</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>11/11/2023</td>
                <td><input type="text" placeholder="Salman"></td>
                <td><input type="text" placeholder="Feling & Chiping"></td>
                <td><input type="text" placeholder="111"></td>
                <td>Palm</td>
                <td><input type="text" placeholder="M1"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 2.78</td>

            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>11/11/2023</td>
                <td><input type="text" placeholder="Salman"></td>
                <td><input type="text" placeholder="Debling"></td>
                <td><input type="text" placeholder="111"></td>
                <td>Bole</td>
                <td><input type="text" placeholder="M23"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td>LYK238</td>
                <td>11233</td>
                <td>RM 5.38</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>11/11/2023</td>
                <td><input type="text" placeholder="Salman"></td>
                <td><input type="text" placeholder="Leveling"></td>
                <td><input type="text" placeholder="0.5"></td>
                <td>HA</td>
                <td><input type="text" placeholder="M13"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 1.67</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>11/11/2023</td>
                <td><input type="text" placeholder="Samsuddin"></td>
                <td><input type="text" placeholder="Debling"></td>
                <td><input type="text" placeholder="215"></td>
                <td>Bole</td>
                <td><input type="text" placeholder="M1"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td>LYK244</td>
                <td>14511</td>
                <td>RM 2.69</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>11/11/2023</td>
                <td><input type="text" placeholder="Samsuddin"></td>
                <td><input type="text" placeholder="Debling"></td>
                <td><input type="text" placeholder="198"></td>
                <td>Palm</td>
                <td><input type="text" placeholder="M1"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 4.95</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>11/11/2023</td>
                <td><input type="text" placeholder="Samsuddin"></td>
                <td><input type="text" placeholder="Feling & Chipping"></td>
                <td><input type="text" placeholder="315"></td>
                <td>HA</td>
                <td><input type="text" placeholder="M1"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 7.88</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>11/11/2023</td>
                <td><input type="text" placeholder="Rustam"></td>
                <td><input type="text" placeholder="Debling"></td>
                <td><input type="text" placeholder="145"></td>
                <td>Bole</td>
                <td><input type="text" placeholder="M13"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td>LYK245</td>
                <td>12355</td>
                <td>RM 3.63</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>11/11/2023</td>
                <td><input type="text" placeholder="Aswan"></td>
                <td><input type="text" placeholder="Stacking"></td>
                <td><input type="text" placeholder="0.2"></td>
                <td>HA</td>
                <td><input type="text" placeholder="M23"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 1.67</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>11/11/2023</td>
                <td><input type="text" placeholder="Aswan"></td>
                <td><input type="text" placeholder="Feling & Chipping"></td>
                <td><input type="text" placeholder="219"></td>
                <td>Palm</td>
                <td><input type="text" placeholder="M1"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 2.74</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>12/11/2023</td>
                <td><input type="text" placeholder="Salman"></td>
                <td><input type="text" placeholder="Feling & Chipping"></td>
                <td><input type="text" placeholder="212"></td>
                <td>Palm</td>
                <td><input type="text" placeholder="M13"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 5.30</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>12/11/2023</td>
                <td><input type="text" placeholder="Salman"></td>
                <td><input type="text" placeholder="Rosak"></td>
                <td><input type="text" placeholder="-"></td>
                <td>-</td>
                <td><input type="text" placeholder="-"></td>
                <td><input type="text" placeholder="-"></td>
                <td></td>
                <td></td>
                <td>LYK238</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>12/11/2023</td>
                <td><input type="text" placeholder="Samsuddin"></td>
                <td><input type="text" placeholder="Debeling"></td>
                <td><input type="text" placeholder="245"></td>
                <td>Bole</td>
                <td><input type="text" placeholder="M1"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td>LYK244</td>
                <td>15111</td>
                <td>RM 3.06</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>12/11/2023</td>
                <td><input type="text" placeholder="Samsuddin"></td>
                <td><input type="text" placeholder="Stacking"></td>
                <td><input type="text" placeholder="0.2"></td>
                <td>HA</td>
                <td><input type="text" placeholder="M23"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 1.67</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>12/11/2023</td>
                <td><input type="text" placeholder="Samsuddin"></td>
                <td><input type="text" placeholder="Feling & Chipping"></td>
                <td><input type="text" placeholder="145"></td>
                <td>Palm</td>
                <td><input type="text" placeholder="M1"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 3.63</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>12/11/2023</td>
                <td><input type="text" placeholder="Rustam"></td>
                <td><input type="text" placeholder="Feling & Chipping"></td>
                <td><input type="text" placeholder="229"></td>
                <td>Palm</td>
                <td><input type="text" placeholder="M1"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 5.73</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.replantingJob') }}" class="btn btn-danger">Delete</a>
                </td>
                <td>12/11/2023</td>
                <td><input type="text" placeholder="Asawan"></td>
                <td><input type="text" placeholder="Feling & Chipping"></td>
                <td><input type="text" placeholder="223"></td>
                <td>Palm</td>
                <td><input type="text" placeholder="M1"></td>
                <td><input type="text" placeholder="-"></td>
                <td>7:00 AM</td>
                <td>5:00 PM</td>
                <td></td>
                <td></td>
                <td>RM 5.58</td>
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
