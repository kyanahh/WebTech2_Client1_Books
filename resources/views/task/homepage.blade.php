@extends('layout.task')

@section('main')

<div class="row">
<div class="col-auto mt-4 pt-5">
        <h1 class="fw-bold pt-5 ps-5">Unleash Your Productivity</h1>
        <h1 class="fw-bold ms-5">Potential with Tasks: Where Efficiency</h1>
        <h1 class="fw-bold ms-5">Meets Simplicity!</h1>
        <a class="btn btn-dark fw-bold ms-5 mt-3 px-5 py-2" href="{{ route('records') }}">SHOW MORE</a>
    </div>
    <div class="col-sm-4 mt-5 ms-5 ps-5">
        <img style="width: 400px" src="https://cdn-icons-png.flaticon.com/512/5165/5165296.png" alt="task"/>
    </div>
</div>
@endsection