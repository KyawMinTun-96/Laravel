@extends('layout.master')
@section('title', 'Register Page')
@section('content')
    <div class="register my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 border py-5 px-3 rounded shadow-sm bg-white">
                    <h1 class="text-center fs-3 mb-3 text-danger">Register</h1>
                    <form method="post">
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="mb-3">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="username">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="c_pass" class="form-label">Comfirm password</label>
                            <input type="password" name="confirm_pass" class="form-control" id="c_pass" placeholder="confirm passwrod">
                        </div>
                        <div class="hstack mt-4">
                            <button type="submit" class="btn btn-primary ms-auto">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection