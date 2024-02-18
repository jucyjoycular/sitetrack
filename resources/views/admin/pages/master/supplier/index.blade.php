@extends('admin.layout.app')

@push('styles')
    <style>
        .dataTables_filter {
            float:right;
        }
        #example1_paginate {
            float: right;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center">
            <div class="breadcrumb">
                <h1 class="mr-2">Supplier Master</h1>
                <ul>
                    <li><a href="{{ route('admin.master.supplier.index') }}">Supplier</a></li>
                    <li>View</li>
                </ul>
            </div>
            <a href="supplier/create" class="btn btn-primary">Add New</a>
        </div>
        <table  id="example1" class="table table-striped text-center" style="width:100%">
            <thead>
                <tr>
                    <th colspan="7">Supplier</th>
                </tr>
                <tr>
                    <th>Action</th>
                    <th>Supplier Code</th>
                    <th>Supplier Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Gl Code</th>
                </tr>
            </thead>
            <tbody>
            @foreach($suppliers as $supplier)
                <tr>
                    <td class="d-flex flex-row">
                        <a href="{{ route('admin.master.supplier.edit', $supplier->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.master.supplier.destroy', $supplier->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Delete</button>
                        </form>
                    </td>
                    <td>{{$supplier->supplier_code}}</td>
                    <td>{{$supplier->supplier_name}}</td>
                    <td>{{$supplier->phone_number}}</td>
                    <td>{{$supplier->address}}</td>
                    <td>{{$supplier->gl_code}}</td>
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
        new DataTable('#example1');
    </script>
@endpush
