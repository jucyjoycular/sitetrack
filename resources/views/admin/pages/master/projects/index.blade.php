@extends('admin.layout.app')

@push('styles')
    <link rel="stylesheet" href="/admin-assets/css/plugins/datatables.min.css" />
@endpush

@section('content')
    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center">
            <div class="breadcrumb">
                <h1 class="mr-2">Site List</h1>
                <ul>
                    <li><a href="{{ route('admin.master.projects.index') }}">Site</a></li>
                    <li>List</li>
                </ul>
            </div>
            <a href="{{ route('admin.master.projects.create') }}" class="btn btn-primary">Add New</a>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="table-responsive">
{{--                            {{ $dataTable->table() }}--}}

                            <table  id="example1" class="table table-striped text-center" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.siteManagementDetails') }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.siteManagementDetails') }}" class="btn btn-danger">Delete</a>
                                    </td>
                                    <td>Wali</td>
                                    <td>1 Nov</td>
                                    <td>31 Dec</td>
                                    <td>Kulalumpur</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.siteManagementDetails') }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.siteManagementDetails') }}" class="btn btn-danger">Delete</a>
                                    </td>
                                    <td>John</td>
                                    <td>1 Nov</td>
                                    <td>30 Nov</td>
                                    <td>Kulalumpur</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.siteManagementDetails') }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.siteManagementDetails') }}" class="btn btn-danger">Delete</a>
                                    </td>
                                    <td>Tony</td>
                                    <td>1 Nov</td>
                                    <td>30 Jan</td>
                                    <td>Singapur</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.siteManagementDetails') }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.siteManagementDetails') }}" class="btn btn-danger">Delete</a>
                                    </td>
                                    <td>Komi</td>
                                    <td>1 Jan</td>
                                    <td>30 Jan</td>
                                    <td>Jinzhou</td>
                                    <td>Pending</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.siteManagementDetails') }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('admin.siteManagementDetails') }}" class="btn btn-danger">Delete</a>
                                    </td>
                                    <td>Zain</td>
                                    <td>1 Nov</td>
                                    <td>30 Nov</td>
                                    <td>Kulalumpur</td>
                                    <td>Active</td>
                                </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Footer Start -->
@endsection

@push('scripts')
<script src="/admin-assets/js/plugins/datatables.min.js"></script>
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
<script>

function handleDeleteRows(data) {
        Swal.fire({
            text: "Deleting data is irreversible, and all related data will be lost",
            icon: "warning",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "No, cancel",
            customClass: {
                confirmButton: "btn fw-bold btn-danger",
                cancelButton: "btn fw-bold btn-active-light-primary"
            }
        }).then(function (result) {
            if (result.value) {
                Swal.fire({
                    html: '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class=""> Loading...</span>',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                });
                // Simulate delete request -- for demo purpose only
                const url = "{{ route('admin.master.projects.destroy', "ID") }}"

                axios.delete(url.replace('ID', data.id))
                .then((response) => {
                    Swal.fire({
                        text: "You have successfully deleted the data",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    }).then(function () {
                        // delete row data from server and re-draw datatable
                        LaravelDataTables['project-table'].draw()
                    });
                })
            }
        });
    }
</script>
@endpush
