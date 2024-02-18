@extends('admin.layout.app')

@push('styles')
<link rel="stylesheet" href="/admin-assets/css/plugins/datatables.min.css" />
<link rel="stylesheet" href="/admin-assets/css/plugins/quill.bubble.min.css" />
<link rel="stylesheet" href="/admin-assets/css/plugins/quill.snow.min.css" />
@endpush

@section('content')
<div class="main-content">
    <div class="d-flex justify-content-between align-items-center">
        <div class="breadcrumb">
            <h1 class="mr-2">Vote</h1>
            <ul>
                <li><a href="{{ route('admin.ticket.car.index') }}">Car</a></li>
                <li>Create</li>
            </ul>
        </div>
        <a href="{{ route('admin.ticket.car.index') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row mb-4">
        <div class="col-md-6 mb-4 offset-3">
            <div class="card text-left">
                <div class="card-body">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form class="needs-validation" novalidate="novalidate" action="{{ route('admin.ticket.car.update', $data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="" name="close" id="close">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="price">Ticket Prices (RM)</label>
                                <input class="form-control" id="price" type="number" name="price" placeholder="Enter ticket price"
                                    required="true" value="{{ $data->ticketCar->price ?? 0 }}"/>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="qty">Ticket Qty</label>
                                <input class="form-control" id="qty" type="number" name="qty" placeholder="Enter ticket qty"
                                    required="true" value="{{ $data->ticketCar->qty ?? 0 }}"/>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="drawDate">Draw Date</label>
                                <input class="form-control" id="drawDate" type="date" name="draw_date" required="true" value="{{ $data->ticketCar->draw_date ?? null }}"/>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="drawTime">Draw Time</label>
                                <input class="form-control" id="drawTime" type="time" name="draw_time" required="true" value="{{ $data->ticketCar->draw_time ?? null }}"/>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-12 text-right" >
                                <button class="btn btn-warning" id="saveClose" type="submit">Submit</button>
                                <button class="btn btn-primary" id="notClose" type="submit">Save & Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- Footer Start -->
@endsection

@push('scripts')

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="/admin-assets/js/scripts/form.validation.script.min.js"></script>

<script>
    $(document).ready(function () {
        $('#saveClose').on('click', function() {
            $('#close').val(true)
        })

        $('#notClose').on('click', function() {
            $('#close').val(false)
        })
    });
</script>
@endpush
