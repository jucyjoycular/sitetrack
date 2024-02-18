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
                <h1 class="mr-2">Site Master</h1>
                <ul>
                    <li><a href="{{ route('admin.master.site.index') }}">Site</a></li>
                    <li>View</li>
                </ul>
            </div>
            <a href="site/create" class="btn btn-primary">Add New</a>
        </div>

        <table id="example" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>Action</th>
                <th>Site ID</th>
                <th>Project GL Code</th>
                <th>Site Name</th>
                <th>Location</th>
                <th>Project Due Date</th>
                <th>Project Start</th>
                <th>Project Completed</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sites as $site)
                <tr>
                    <td class="d-flex flex-row">
                        <a href="{{ route('admin.master.siteDetail', $site->id) }}" class="btn btn-primary mr-1">Detail</a>
                        <a href="{{ route('admin.master.site.edit', $site->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.master.site.destroy', $site->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Delete</button>
                        </form>
                    </td>
                    <td>{{$site->site_id}}</td>
                    <td>{{$site->project_gl_code}}</td>
                    <td>{{$site->site_name}}</td>
                    <td>{{$site->location}}</td>
                    <td>{{$site->project_due_date}}</td>
                    <td>{{$site->project_start}}</td>
                    <td>{{$site->project_completed}}</td>
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
