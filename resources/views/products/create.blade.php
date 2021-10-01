@extends('layout.master')
@section('title', 'Create Product')
@section('content')
    <div class="container col-md-6">
        <div class="well p-5">
            <legend class="mb-5 text-center">Create Products</legend>
            <div class="bg-white border border-danger rounded-2 p-5">
                <form action="{{url('products/create')}}" method="get" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="title..">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <input name="content" type="email" class="form-control" id="content" placeholder="content..">
                    </div>

                    <div class="mb-3">
                        <label for="cart-id" class="form-label">Cart ID</label>
                        <input name="cartID" type="number" class="form-control" id="cart-id" placeholder="cart id..">
                    </div>

                    <div class="mb-3">
                        <label for="brand-id" class="form-label">Brand ID</label>
                        <input name="brandID" type="number" class="form-control" id="brand-id" placeholder="brand id..">
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">Images</label>
                        <input name="img" type="file" id="images" placeholder="title..">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prices</label>
                        <input name="title" type="number" class="form-control" id="price" placeholder="price..">
                    </div>

                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" name="create" class="btn btn-primary btn-md">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection