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
            <h1 class="mr-2">Main</h1>
            <ul>
                <li><a href="{{ route('admin.master.projects.index') }}">Projects</a></li>
                <li>Create</li>
            </ul>
        </div>
        <a href="{{ route('admin.master.projects.index') }}" class="btn btn-primary">Back</a>
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
                    <form class="needs-validation" novalidate="novalidate" action="{{ route('admin.master.projects.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" value="" name="close" id="close">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="name">Project name</label>
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter project name"
                                       required="true" value="{{ $data->name }}"/>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="location">Project location</label>
                                <input class="form-control" id="location" type="text" name="location" placeholder="Enter project location"
                                       required="true" value="{{ $data->name }}"/>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="start_date">Start date</label>
                                <input class="form-control" id="start_date" type="date" name="start_date" value ="{{$data->start_date}}"/>

                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="end_date">End date</label>
                                <input class="form-control" id="end_date" type="date" name="end_date" value="{{$data->end_date}}"
                                />

                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="status">Project status</label>
                                <select class="form-control" id="status" name="status" required="true">
                                    <option value="PENDING"{{ $data->status === 'PENDING' ? ' selected' : '' }}>PENDING</option>
                                    <option value="ON_GOING"{{ $data->status === 'ON_GOING' ? ' selected' : '' }}>ON_GOING</option>
                                    <option value="FINISHED"{{ $data->status === 'FINISHED' ? ' selected' : '' }}>FINISHED</option>
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 text-right" style="margin-top:10rem">
                                <button class="btn btn-warning" id="saveClose" type="submit">Update</button>
                                <button class="btn btn-primary" id="notClose" type="submit">Update & Close</button>
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
