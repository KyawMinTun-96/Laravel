@extends('layout.master')
@section('title', 'Login Page')
@section('content')
<div class="login my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 border py-5 px-5 rounded shadow-sm bg-white">
                    <h1 class="text-center fs-3 mb-3 text-primary">Login</h1>
                    <form method="post">
                    @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="hstack mt-4">
                            <button type="submit" class="btn btn-primary ms-auto">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection