@extends('admin.layout.app')

@push('styles')
    <link rel="stylesheet" href="/admin-assets/css/plugins/datatables.min.css" />
@endpush

@section('content')
    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center">
            <div class="breadcrumb">
                <h1 class="mr-2">Ticket</h1>
                <ul>
                    <li><a href="{{ route('admin.ticket.car.index') }}">Car</a></li>
                    <li>List</li>
                </ul>
            </div>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="table-responsive">
                            {{ $dataTable->table() }}
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
                const url = "{{ route('admin.ticket.car.destroy', "ID") }}"

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
                        LaravelDataTables['carTicket-table'].draw()
                    });
                })
            }
        });

    }

</script>
@endpush