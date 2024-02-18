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
                <h1 class="mr-2">Job Activity</h1>
                <ul>
                    <li><a href="{{ route('admin.master.jobActivity.index') }}">Job Activity</a></li>
                    <li>View</li>
                </ul>
            </div>
            <a href="jobActivity/create" class="btn btn-primary">Add New</a>
        </div>
        <table  id="example1" class="table table-striped text-center" style="width:100%">
            <thead>
                <tr>
                    <th colspan="4">Job Activity</th>
                </tr>
                <tr>
                    <th>Action</th>
                    <th>No</th>
                    <th>Work Description</th>
                    <th>UOM</th>
                </tr>
            </thead>
            <tbody>
            @foreach($job_activities as $job_activity)
                <tr>
                    <td class="d-flex flex-row">
                        <a href="{{ route('admin.master.jobActivity.edit', $job_activity->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.master.jobActivity.destroy', $job_activity->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="margin-left: 2px;">Delete</button>
                        </form>
                    </td>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$job_activity->work_description}}</td>
                    <td>{{$job_activity->uom}}</td>
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
