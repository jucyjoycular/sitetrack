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
                <h1 class="mr-2">Machinery Master</h1>
                <ul>
                    <li><a href="{{ route('admin.master.user.index') }}">Machinery</a></li>
                    <li>View</li>
                </ul>
            </div>
            <a href="vehicle/create" class="btn btn-primary">Add New</a>
        </div>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Action</th>
                <th>Name</th>
                <th>Machine Id</th>
                <th>Model</th>
                <th>Type</th>
                <th>Fuel Type</th>
                <th>Fuel Capacity</th>
                <th>Machine GL Code</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td class="d-flex flex-row">
                        <a href="{{ route('admin.master.vehicle.edit', $vehicle->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.master.vehicle.destroy', $vehicle->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Delete</button>
                        </form>
                    </td>
                    <td>{{$vehicle->name}}</td>
                    <td>{{$vehicle->vehicle_id}}</td>
                    <td>{{$vehicle->model}}</td>
                    <td>{{$vehicle->type}}</td>
                    <td>{{$vehicle->fuel_type}}</td>
                    <td>{{$vehicle->fuel_capacity}}</td>
                    <td>{{$vehicle->gl_code}}</td>
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
