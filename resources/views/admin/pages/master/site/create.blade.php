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
            <h1 class="mr-2">Site Master</h1>
            <ul>
                <li><a href="{{ route('admin.master.site.index') }}">Site</a></li>
                <li>Create</li>
            </ul>
        </div>
        <a href="{{ route('admin.master.site.index') }}" class="btn btn-primary">Back</a>
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
                    <form class="needs-validation" novalidate="novalidate" action="{{ route('admin.master.site.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="" name="close" id="close">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="site_id">Site ID</label>
                                <input class="form-control" id="site_id" type="text" name="site_id" placeholder="Enter Site ID" required="true" value="{{ old('site_id') }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="project_gl_code">Project GL Code</label>
                                <input class="form-control" id="project_gl_code" type="text" name="project_gl_code" placeholder="Project GL Code" value="{{ old('project_gl_code') }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="site_name">Site Name</label>
                                <input class="form-control" id="site_name" type="text" name="site_name" placeholder="Enter Site Name" required="true" value="{{ old('site_name') }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="location">Location</label>
                                <input class="form-control" id="location" type="text" name="location" placeholder="Enter Location" required="true" value="{{ old('location') }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="project_due_date">Project Due Date</label>
                                <input class="form-control" id="project_due_date" type="date" name="project_due_date" placeholder="Enter Project Due Date" required="true" value="{{ old('project_due_date') }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="project_start">Project Start</label>
                                <input class="form-control" id="project_start" type="date" name="project_start" placeholder="Enter Project Start Date" required="true" value="{{ old('project_start') }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="project_completed">Project Complete</label>
                                <input class="form-control" id="project_completed" type="date" name="project_completed" placeholder="Enter Project Completed Date" value="{{ old('project_completed') }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 text-right" style="margin-top:2rem">
                                <button class="btn btn-warning" id="saveClose" type="submit">Submit</button>
                                <button class="btn btn-primary" id="notClose" type="submit">Save & Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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

        let oldHTML = unescapeHTML("{{ old('specs') }}")

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
