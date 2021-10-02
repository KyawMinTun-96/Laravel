@extends('layout.master')
@section('title', 'Create Product')
@section('content')
    <div class="container col-md-6">
        <div class="well p-5">
            <legend class="mb-5 text-center">Create Products</legend>
            <div class="bg-white border border-danger rounded-2 p-5">
                <form method="post" enctype="multipart/form-data">

                @foreach($errors->all() as $error) 
                    <p class="alert alert-danger">{{$error}}</p>

                    @endforeach

                @if(session('status')) 
                    <p class="alert alert-success">{{session('status')}}</p>
                    @endif


                    <!-- {{csrf_field()}} --> 
                        <!-- or -->
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="title..">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prices</label>
                        <input name="price" type="number" class="form-control" id="price" placeholder="price..">
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea class="form-control" name="description" placeholder="enter the descripton.." id="desc" style="height: 100px; resize:none;"></textarea>
                    </div>

                    <!-- <div class="mb-3">
                        <label for="cart-id" class="form-label">Cart ID</label>
                        <input name="cartID" type="number" class="form-control" id="cart-id" placeholder="cart id..">
                    </div>

                    <div class="mb-3">
                        <label for="brand-id" class="form-label">Brand ID</label>
                        <input name="brandID" type="number" class="form-control" id="brand-id" placeholder="brand id..">
                    </div> -->

                    <div class="mb-3">
                        <label for="images" class="form-label">Images</label>
                        <input name="img[]" type="file" id="images" placeholder="title.." multiple>
                    </div>
                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" name="create" class="btn btn-primary btn-md">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection