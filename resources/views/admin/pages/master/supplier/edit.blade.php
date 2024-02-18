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
            <h1 class="mr-2">Supplier Master</h1>
            <ul>
                <li><a href="{{ route('admin.master.supplier.index') }}">Supplier</a></li>
                <li>Edit</li>
            </ul>
        </div>
        <a href="{{ route('admin.master.supplier.index') }}" class="btn btn-primary">Back</a>
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
                    <form class="needs-validation" novalidate="novalidate" action="{{ route('admin.master.supplier.update', ['supplier' => $data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="" name="close" id="close">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="supplier_code">Supplier Code</label>
                                <input class="form-control" id="supplier_code" type="text" name="supplier_code" placeholder="Enter Supplier Code" required="true" value="{{ $data->supplier_code }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="supplier_name">Supplier Name</label>
                                <input class="form-control" id="supplier_name" type="text" name="supplier_name" placeholder="Enter Supplier Name" required="true" value="{{ $data->supplier_name }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="phone_number">Phone Number</label>
                                <input class="form-control" id="phone_number" type="number" name="phone_number" placeholder="Enter Phone Number" required="true" value="{{ $data->phone_number }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="address">address</label>
                                <input class="form-control" id="address" type="text" name="address" placeholder="Enter address" required="true" value="{{ $data->address }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="gl_code">Supplier GL Code</label>
                                <input class="form-control" id="gl_code" type="text" name="gl_code" placeholder="Enter Supplier GL Code" required="true" value="{{ $data->gl_code }}"/>
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
