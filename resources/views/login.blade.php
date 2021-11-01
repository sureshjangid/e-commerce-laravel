@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class=" card bg-dark col-sm-4 mt-5 mx-auto">
            <div class="card-header">
                <h4 class="p-3 text-center text-white">Login Form</h4>
            </div>
            <form action="">
                <input type="text" name="username" class="form-control mb-2" placeholder="Enter your username">
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </form>
            <div class="card-footer">
                <button class="btn btn-outline-success">Login</button>
            </div>
        </div>
    </div>
</div>

@endsection