@extends('admin.layout.auth')

@section('content')
<form action="{{route('admin.login')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Username </label>
        <input
            type="text"
            class="form-control @error('email') is-invalid @enderror"
            id="username"
            name="username"
            placeholder="Enter username"
            value="{{ old('username') }}"
        >
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="d-flex justify-content-between">
        <label for="password" class="form-label">Password</label>
        {{-- <a href="{{ route('student.password.request') }}" class="forgot-password text-decoration-none text-muted">Forgot Password?</a> --}}
    </div>
    <div class="mb-3">
        <div class="input-group">
            <input
                type="password"
                name="password"
                class="form-control @error('password') is-invalid @enderror"
                id="password"
                aria-label="Password"
                aria-describedby="password-addon"
                placeholder="Enter password"
            >
        </div>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember-check">
            <label class="form-check-label" for="remember-check">
                Remember me
            </label>
        </div>
    </div>
    <div class="mb-3 d-grid gap-2">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>
@endsection
