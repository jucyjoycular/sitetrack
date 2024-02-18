@extends('admin.layout.app')

@push('styles')
    <style>
        .dataTables_filter {
            float:right;
        }
        #example_paginate {
            float: right;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center">
            <div class="breadcrumb">
                <h2 class="mr-2">Manpower Master</h2>
            </div>
            <a href="user/create" class="btn btn-primary">Add New</a>
        </div>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Action</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Joined Date</th>
                <th>IC/Passport</th>
                <th>Passport Expiry</th>
                <th>Permit No</th>
                <th>Permit Expiry</th>
                <th>GL Code</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="d-flex flex-row">
                            <a href="{{ route('admin.master.user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.master.user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Delete</button>
                            </form>
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->joined_date}}</td>
                        <td>{{$user->ic_passport}}</td>
                        <td>{{$user->passport_expiry}}</td>
                        <td>{{$user->permit_number}}</td>
                        <td>{{$user->permit_expiry}}</td>
                        <td>{{$user->gl_code}}</td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
@endpush
