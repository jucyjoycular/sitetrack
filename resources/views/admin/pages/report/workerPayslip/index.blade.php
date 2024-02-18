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
                <h1 class="mr-2">Worker Payslip</h1>
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
                        <form id="saveCloseForm" method="GET" action="{{ route('admin.generatedPIC') }}">
                            @csrf
                            <input type="hidden" value="" name="close" id="close">
                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="name">Month </label>
                                    <select class="form-control" id="month" name="month" required="true">
                                        <option value="" disabled selected>Select Month</option>
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
                                    <select class="form-control" id="typeselect" name="worker_type" required="true">
                                        <option value="PIC">PIC</option>
                                        <option value="Operator">Operator</option>
                                        <option value="Mechanic">Mechanic</option>
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="type">Worker</label>
                                    <select class="form-control" id="workerselect" onchange="handleChangeData(event)" name="operator" required="true">
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>

{{--                                <div class="col-md-12 text-left" style="margin-top:1rem">--}}
{{--                                    <a class="btn btn-primary" style="width: 10%; font-size: 20px;" role="button" id="saveClose" type="submit" href="#">Exel</a>--}}
{{--                                    <a class="btn btn-primary" style="width: 10%; font-size: 20px;" role="button" id="saveClose" type="submit" href="#">PDF</a>--}}
{{--                                </div>--}}


                                <div class="col-md-12 text-center" style="margin-top:3rem">
                                    <a class="btn btn-primary" role="button" id="saveClose" type="submit" href="{{ route('admin.generatedPIC') }}">Generate</a>
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
        let url = '/admin/salary-mechanic/1';
        const options = {
            'PIC': {
                worker: [
                    {name:'PIC 1', id:1, url:`/admin/salary-pic/1`},
                    {name:'PIC 2', id:2, url:`/admin/salary-pic/2`}]
            },
            'Operator': {
                worker: [
                    {name:'Operator 1', id:1, url:`/admin/salary-operator/1`},
                    {name:'Operator 2', id:2, url:`/admin/salary-operator/2`}]
            },
            'Mechanic': {
                worker: [
                    {name:'Mechanic 1', id:1, url:`/admin/salary-mechanic/1`},
                    {name:'Mechanic 2', id:2, url:`/admin/salary-mechanic/2`}]
            }
        }

        function updateTypeByWorker(e) {
            workerselect.innerHTML = "";
            options[typeselect.value].worker.forEach(e => workerselect.innerHTML += `<option value="${e.name}">${e.name}</option>`)
        }
        typeselect.addEventListener('change', updateTypeByWorker);
        updateTypeByWorker();

        function handleChangeData(e) {
            const selectedWorker = options[typeselect.value].worker.find(worker => worker.name === e.target.value);
            saveCloseForm.action = selectedWorker.url;
            console.log("e ==>",e.target.value);
        }
    </script>
@endpush
