@extends('layout.app')

@section('main')

<div class="row">
<div class="col-auto mt-4 pt-5">
        <h1 class="fw-bold pt-5 ps-5">Unleash Your Productivity</h1>
        <h1 class="fw-bold ms-5">Potential with Tasks: Where Efficiency</h1>
        <h1 class="fw-bold ms-5">Meets Simplicity!</h1>
        <a class="btn btn-dark fw-bold ms-5 mt-3 px-5 py-2" href="{{ route('mylogin') }}">SHOW MORE</a>
    </div>
<div class="col-sm-4 mx-5 pt-3">
    <div class="card">
    <form method="POST" action="{{ route('user') }}" class="p-5">
                @csrf
                @if($errors->has('email') || $errors->has('password'))
                        <div class="alert alert-danger alert-block">
                            <strong>Invalid credentials</strong>
                        </div>
                @endif
            <h1 class="h5 mb-4">SIGN UP</h1>
            <div class="form-group mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" value="{{ old('name') }}" required autofocus/>
                @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" placeholder="Enter email address" required>
            @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group mb-3">
        <button type="submit" class="btn btn-dark form-control mt-3 mb-3">Sign up</button>
        </div>
        <hr>
        <div class="text-center">
            <a class="text-decoration-none text-center text-dark" href="{{ route('mylogin') }}">Already a member? Sign in here.</a>
        </div>
    </form>
    </div>
</div>
</div>
@endsection