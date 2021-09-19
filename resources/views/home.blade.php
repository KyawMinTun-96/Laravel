@extends('layout.master')
@section('title', 'Home Page')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('layout.sidebar')
            <div class="col-md-9">
                Content
            </div>
        </div>
    </div>
    @endsection