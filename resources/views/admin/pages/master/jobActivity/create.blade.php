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
                <h1 class="mr-2">Job Activity</h1>
                <ul>
                    <li><a href="{{ route('admin.master.jobActivity.index') }}">Job Activity</a></li>
                    <li>Create</li>
                </ul>
            </div>
            <a href="{{ route('admin.master.jobActivity.index') }}" class="btn btn-primary">Back</a>
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
                        <form class="needs-validation" novalidate="novalidate" action="{{ route('admin.master.jobActivity.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="" name="close" id="close">
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="work_description">Work Description</label>
                                    <input class="form-control" id="work_description" type="text" name="work_description" placeholder="Enter Work Description" required="true" value="{{ old('work_description') }}"/>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="uom">UOM</label>
                                    <input class="form-control" id="uom" type="text" name="uom" placeholder="Enter UOM" required="true" value="{{ old('uom') }}"/>
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
