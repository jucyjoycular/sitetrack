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
                <h1 class="mr-2">Salary For PIC</h1>
                <ul>
                    <li><a href="{{ route('admin.master.vehicle.index') }}">Salary</a></li>
                    <li>View</li>
                </ul>
            </div>
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
                        <form class="needs-validation" novalidate="novalidate" action="{{ route('admin.master.vehicle.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="" name="close" id="close">
                            <div class="row">
{{--                                <div class="col-md-12 form-group mb-3">--}}
{{--                                    <label for="name">Site</label>--}}
{{--                                    <select class="form-control" id="site" name="site" required="true">--}}
{{--                                        <option value="">All</option>--}}
{{--                                        <option value="EXCAVATOR">Site 1</option>--}}
{{--                                        <option value="BULLDOZER">Site 2</option>--}}
{{--                                    </select>--}}
{{--                                    <div class="invalid-feedback"></div>--}}
{{--                                </div>--}}
                                <div class="col-md-12 form-group mb-3">
                                    <label for="name">Month </label>
                                    <select class="form-control" id="month" name="month" required="true">
                                        <option value="">Select Month</option>
                                        <option value="Jan">Jan</option>
                                        <option value="Feb">Feb</option>
                                        <option value="Mar">Mar</option>
                                        <option value="Apr">Apr</option>
                                        <option value="May">May</option>
                                        <option value="Jun">Jun</option>
                                        <option value="Jul">July</option>
                                        <option value="Aug">Aug</option>
                                        <option value="Sep">Sept</option>
                                        <option value="Oct">Oct</option>
                                        <option value="Nov">Nov</option>
                                        <option value="Dec">Dec</option>
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="model"> Worker Type </label>
                                    <select class="form-control" id="worker_type" name="worker_type" required="true">
                                        <option value="">Select Worker Type</option>
                                        <option value="EXCAVATOR">Operator</option>
                                        <option value="BULLDOZER">Mechanic</option>
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="type">Worker</label>
                                    <select class="form-control" id="operator" name="operator" required="true">
                                        <option value="">Select Worker</option>
                                        <option value="EXCAVATOR">Operator 1</option>
                                        <option value="BULLDOZER">Operator 2</option>
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-12 text-center" style="margin-top:3rem">
                                    <a class="btn btn-primary" role="button" id="saveClose" type="submit" href="{{ route('admin.generatedPIC') }}">Generate</a>
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
