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
            <h1 class="mr-2">Master Data</h1>
            <ul>
                <li><a href="{{ route('admin.master.user.index') }}">User</a></li>
                <li>Edit</li>
            </ul>
        </div>
        <a href="{{ route('admin.master.user.index') }}" class="btn btn-primary">Back</a>
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
                    
                    <form class="needs-validation" novalidate="novalidate" action="{{ route('admin.master.user.update', ['user' => $data->id]) }}" method="post">
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
                                <label for="username">username</label>
                                <input class="form-control" id="username" type="username" name="username" placeholder="Enter username" required="true" value="{{ $data->username }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="phone_number">Phone Number</label>
                                <input class="form-control" id="phone_number" type="tel" name="phone_number" placeholder="Enter phone number" required="true" value="{{ $data->phone_number }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="phone_number">Email</label>
                                <input class="form-control" id="email" type="email" name="email" placeholder="Enter Email" required="true" value="{{ $data->email }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="password">Password (Leave blank to keep the same)</label>
                                <input class="form-control" id="password" type="password" name="password" placeholder="Enter Password to replace old"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="joined_date">Joined Date</label>
                                <input class="form-control" id="joined_date" type="date" name="joined_date" placeholder="Enter Joined Date" required="true" value="{{ $data->joined_date }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="ic_passport">IC / Passport</label>
                                <input class="form-control" id="ic_passport" type="text" name="ic_passport" placeholder="Enter IC / Passport" required="true" value="{{ $data->ic_passport }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="passport_expiry">IC / Passport Expiry</label>
                                <input class="form-control" id="passport_expiry" type="date" name="passport_expiry" placeholder="Enter IC / Passport Expiry" required="true" value="{{ $data->passport_expiry }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="permit_number">Permit Number</label>
                                <input class="form-control" id="permit_number" type="text" name="permit_number" placeholder="Enter Permit Number" required="true" value="{{ $data->permit_number }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="permit_expiry">Permit Expiry</label>
                                <input class="form-control" id="permit_expiry" type="date" name="permit_expiry" placeholder="Enter Permit Expiry" required="true" value="{{ $data->permit_expiry }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="role">Role</label>
                                <select class="form-control" id="role" name="role" required="true">
                                    <option value="OPERATOR"{{ $data->role === 'OPERATOR' ? ' selected' : '' }}>OPERATOR</option>
                                    <option value="MECHANIC"{{ $data->role === 'MECHANIC' ? ' selected' : '' }}>MECHANIC</option>
                                    <option value="SUPERVISOR"{{ $data->role === 'SUPERVISOR' ? ' selected' : '' }}>SUPERVISOR</option>
                                    <option value="MANAGER"{{ $data->role === 'MANAGER' ? ' selected' : '' }}>MANAGER</option>
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="gl_code">GL Code</label>
                                <input class="form-control" id="gl_code" type="text" name="gl_code" placeholder="Enter GL Code" required="true" value="{{ $data->gl_code }}"/>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 text-right" style="margin-top:2rem">
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

</script>
@endpush
