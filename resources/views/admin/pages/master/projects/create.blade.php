@extends('admin.layout.app')

@push('styles')
<link rel="stylesheet" href="/admin-assets/css/plugins/datatables.min.css" />
<link rel="stylesheet" href="/admin-assets/css/plugins/quill.bubble.min.css" />
<link rel="stylesheet" href="/admin-assets/css/plugins/quill.snow.min.css" />
    <style>
        .form-group label {
            font-weight:bold;
            color:#000 !important;
        }
        .form-control {
            background: #fff !important;
            border: 1px solid #fff !important;
        }
        .modal1, .modal2, .modal3, .modal4 {
            display: none;
        }
    </style>
@endpush

@section('content')

<div class="main-content">
    <div class="d-flex justify-content-between align-items-center">
        <div class="breadcrumb">
            <h1 class="mr-2">Main</h1>
            <ul>
                <li><a href="{{ route('admin.master.projects.index') }}">Project</a></li>
                <li>Create</li>
            </ul>
        </div>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <h3 style="font-weight:bold;">Add Project</h3>
    <div class="row mb-4">
        <div class="col-md-8 mb-6 offset-2">
            <div id="modal1">
                <h3 style="font-weight:bold;">Project Information</h3>
                <div class="card text-left" style="background:#efefef">
                    <div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <form class="needs-validation" novalidate="novalidate" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="" name="close" id="close">
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="name">Project name</label>
                                    <input class="form-control" id="project_name" type="text" name="project_name" placeholder="Enter Project Name"
                                           required="true" value="{{ old('project_name') }}"/>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="location">Project value</label>
                                    <input class="form-control" id="project_value" type="text" name="project_value" placeholder="Enter Project Value"
                                           required="true" value="{{ old('project_value') }}"/>
                                    <div class="invalid-feedback">

                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="start_date">Project Code</label>
                                    <input class="form-control" id="project_code" placeholder="Enter The Project Code" type="text" name="project_code"
                                    />
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="end_date">Project Information / hit</label>
                                    <textarea class="form-control" placeholder="Enter The Project Information" rows="4" id="project_information" type="text" name="project_information"></textarea>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-12 text-right mt-4">
                    <button id="Button1" value="Click" onclick="switchVisible();" class="btn btn-success" style="font-weight:bold;width:120px;position:relative;left:10px;" type="button">Next
                    </button>
                </div>
            </div>

            <div id="modal2">
                <div class="main-content">
                    <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">Site Details</h2>
                    <table id="example2" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>CheckBox</th>
                            <th>Work Description Activity</th>
                            <th>UOM Activity</th>
                            <th>Contract Quantity</th>
                            <th>Job Rate / RM</th>
                            <th>Contract Rate</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>Feeling & Chipping / Cincang</p>
                                <p>Block 98</p>
                                <p>Block 98</p>
                                <p>Block 97</p>
                                <p>Block 96</p>
                                <p>Block 95</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td style="color:red;">
                                <p>Meter</p>
                                <p>Meter</p>
                                <p>Meter</p>
                                <p>Meter</p>
                                <p>Meter</p>
                                <p>Meter</p>
                            </td>
                            <td style="color:red;">
                                <p><input type="number" value="1000" /></p>
                                <p><input type="number" value="1000" /></p>
                                <p><input type="number" value="1000" /></p>
                                <p><input type="number" value="1000" /></p>
                                <p><input type="number" value="1000" /></p>
                                <p><input type="number" value="1000" /></p>
                            </td>
                            <td style="color:red;">
                                <p><input type="number" value="24" /></p>
                                <p><input type="number" value="24" /></p>
                                <p><input type="number" value="24" /></p>
                                <p><input type="number" value="24" /></p>
                                <p><input type="number" value="24" /></p>
                                <p><input type="number" value="24" /></p>
                            </td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>Deboling / Korek Lobang</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td>
                                <p>Meter</p>
                            </td>
                            <td><input type="number" value="1000" /></td>
                            <td><input type="number" value="24" /></td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>Stacking & clearing & levelling / Stacking</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td>
                                <p>Meter</p>
                            </td>
                            <td><input type="number" value="1000" /></td>
                            <td><input type="number" value="24" /></td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>Feeling & Chipping / Cincang</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td>
                                <p>HR</p>
                            </td>
                            <td><input type="number" value="1000" /></td>
                            <td><input type="number" value="24" /></td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>Holing / Cucok Lobang</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td><input type="number" value="5000" /></td>
                            <td><input type="number" value="24" /></td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>Planting Platform / Bikin Platform</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td><input type="number" value="5000" /></td>
                            <td><input type="number" value="24" /></td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>CECT / Parit Sampah</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td><input type="number" value="5000" /></td>
                            <td><input type="number" value="24" /></td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>Cambering / Camber</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td><input type="number" value="5000" /></td>
                            <td><input type="number" value="24" /></td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>Compaction / Kompak</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td><input type="number" value="5000" /></td>
                            <td><input type="number" value="24" /></td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>Planting Bund / Bikin Bund</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td><input type="number" value="5000" /></td>
                            <td><input type="number" value="24" /></td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>
                                <p>Repair Terraces / Repair Teres</p>
                                <button class="btn btn-sm btn-info">add new block</button>
                            </td>
                            <td>
                                <p>-</p>
                            </td>
                            <td><input type="number" value="5000" /></td>
                            <td><input type="number" value="24" /></td>
                            <td><input type="number" value="1000" /></td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>

                <div class="col-md-12 text-right mt-4">
                    <button id="Button1" value="Click" onclick="switchVisible();" class="btn btn-success" style="font-weight:bold;width:120px;position:relative;left:10px;" type="button">Next
                    </button>
                </div>
            </div>

            <div id="modal3">
                <h3 style="font-weight:bold;">Man Power Info</h3>
                <div class="card text-left" style="background:#efefef">
                    <div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <form class="needs-validation" novalidate="novalidate" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="" name="close" id="close">
                            <div class="row">
                                <div class="dropdown col-md-6 form-group mb-3">
                                    <label for="name">Select Main Power</label>
                                    <select class="form-control">
                                        <option>User 1</option>
                                        <option>User 2</option>
                                        <option>User 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="start_date">Site Name</label>
                                    <select class="form-control">
                                        <option>Site 1</option>
                                        <option>Site 2</option>
                                        <option>Site 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="start_date">Select Supervisor</label>
                                    <select class="form-control">
                                        <option>Supervisor 1</option>
                                        <option>Supervisor 2</option>
                                        <option>Supervisor 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="start_date">Select Operator</label>
                                    <select class="form-control js-example-basic-multiple" name="operators[]" multiple="multiple">
                                        <option>Operator 1</option>
                                        <option>Operator 2</option>
                                        <option>Operator 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="start_date">Select Mechanic</label>
                                    <select class="form-control">
                                        <option>Mechanic 1</option>
                                        <option>Mechanic 2</option>
                                        <option>Mechanic 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-12 text-right mt-4">
                    <button id="Button1" value="Click" onclick="switchVisible();" class="btn btn-success" style="font-weight:bold;width:120px;position:relative;left:10px;" type="button">Next
                    </button>
                </div>
            </div>

            <div id="modal4">
                <h3 style="font-weight:bold;">Machine Details</h3>
                <div class="card text-left" style="background:#efefef">
                    <div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <form class="needs-validation" novalidate="novalidate" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="" name="close" id="close">
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="name">Assign Machine List For Site</label>
                                    <select class="form-control">
                                        <option>Machine 1</option>
                                        <option>Machine 2</option>
                                        <option>Machine 3</option>
                                        <option>Machine 4</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-12 text-right mt-4">
                    <button id="Button1" value="Click" onclick="switchVisible();" class="btn btn-success" style="font-weight:bold;width:120px;position:relative;left:10px;" type="button">Finshed
                    </button>
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
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });

    var divIds = [
        'modal1',
        'modal2',
        'modal3',
        'modal4'
    ];

    var visibleIndex = 0;

    function switchVisible() {
        divIds.forEach(id => {
            document.getElementById(id).style.display = 'none';
        });
        document.getElementById(divIds[visibleIndex]).style.display = 'block';
        visibleIndex++;
        if (visibleIndex === divIds.length) {
            visibleIndex = 0;
        }
    }
    switchVisible()

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
