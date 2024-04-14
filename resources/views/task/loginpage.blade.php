@extends('layout.signup')

@section('main')

<div class="row ps-5">
<div class="col-auto mt-4 pt-5">
        <h1 class="fw-bold pt-5 ps-5">Unleash Your Productivity</h1>
        <h1 class="fw-bold ms-5">Potential with Tasks: Where Efficiency</h1>
        <h1 class="fw-bold ms-5">Meets Simplicity!</h1>
        <a class="btn btn-dark fw-bold ms-5 mt-3 px-5 py-2" href="{{ route('mylogin') }}">SHOW MORE</a>
    </div>
<div class="col-sm-4 pt-5 ms-5">
    <div class="card">
    <form method="POST" action="{{ route('signin') }}" class="p-5">
                @csrf
                @if($errors->has('email') || $errors->has('password'))
                        <div class="alert alert-danger alert-block">
                            <strong>Invalid credentials</strong>
                        </div>
                @endif
            <h1 class="h5 mb-4">SIGN IN</h1>
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autofocus>
            @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group mb-3">
        <button type="submit" class="btn btn-dark form-control mt-3 mb-3">Sign in</button>
        </div>
        <hr>
        <div class="text-center">
            <a class="text-decoration-none text-center text-dark" href="{{ route('register') }}">Not a member yet? Sign up here.</a>
        </div>
    </form>
    </div>
</div>
</div>
@endsection