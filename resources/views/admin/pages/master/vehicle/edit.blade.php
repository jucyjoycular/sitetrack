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
            <h1 class="mr-2">Machinery Master</h1>
            <ul>
                <li><a href="{{ route('admin.master.vehicle.index') }}">Machinery</a></li>
                <li>Edit</li>
            </ul>
        </div>
        <a href="{{ route('admin.master.vehicle.index') }}" class="btn btn-primary">Back</a>
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

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <form class="needs-validation" novalidate="novalidate" action="{{ route('admin.master.vehicle.update', ['vehicle' => $data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="" name="close" id="close">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="name">Name</label>
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter name" required="true" value="{{ $data->name }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="vehicle_id">Machine ID</label>
                                <input class="form-control" id="vehicle_id" type="text" name="vehicle_id" placeholder="Enter Machine ID" value="{{ $data->vehicle_id }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="name">Machine Model</label>
                                <input class="form-control" id="model" type="text" name="model" placeholder="Enter Machine Model" required="true" value="{{ $data->model }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="type">Type</label>
                                <select class="form-control" id="type" name="type" required="true">
                                    <option value="EXCAVATOR"{{ $data->type === 'EXCAVATOR' ? ' selected' : '' }}>EXCAVATOR</option>
                                    <option value="BULLDOZER"{{ $data->type === 'BULLDOZER' ? ' selected' : '' }}>BULLDOZER</option>
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="fuel_type">Fuel Type</label>
                                <select class="form-control" id="fuel_type" name="fuel_type" required="true">
                                    <option value="GAS"{{ $data->fuel_type === 'GAS' ? ' selected' : '' }}>GAS</option>
                                    <option value="DIESEL"{{ $data->fuel_type === 'DIESEL' ? ' selected' : '' }}>DIESEL</option>
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for=fuel_capacity">Fuel Capacity</label>
                                <input class="form-control" id="fuel_capacity" type="text" name="fuel_capacity" placeholder="Enter fuel capacity" required="true" value="{{ $data->fuel_capacity }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="gl_code">Machine GL Code</label>
                                <input class="form-control" id="gl_code" type="text" name="gl_code" placeholder="Enter Machine GL Code" required="true" value="{{ $data->gl_code }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 text-right" style="margin-top: 10rem">
                                <button class="btn btn-warning" id="saveClose" type="submit">Update</button>
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
<script src="/admin-assets/js/plugins/quill.min.js"></script>
<script>
    function unescapeHTML(str){
        return str.replace(
          /&amp;|&lt;|&gt;|&#39;|&quot;/g,
          tag =>
            ({
              '&amp;': '&',
              '&lt;': '<',
              '&gt;': '>',
              '&#39;': "'",
              '&quot;': '"'
            }[tag] || tag)
        );
    }

    $(document).ready(function () {
        var quill = new Quill('#full-editor', {
            theme: 'snow'
        });


        let oldHTML = unescapeHTML("{{ $data->spec }}")

        quill.pasteHTML(oldHTML)

        $('#saveClose').on('click', function() {
            $('#close').val(true)
        })

        $('#notClose').on('click', function() {
            $('#close').val(false)
        })

        $("form").on("submit",function() {
            var html = quill.root.innerHTML;

            // Copy HTML content in hidden form
            $('#hiddenArea').val( html )
        })

    });

</script>
@endpush
