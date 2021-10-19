@extends('layout.master')
@section('title', 'Home Page')
@section('content')



    <!---------------- product card ----------------->
    <div class="product">
        <div class="container">
                <!-- <div class="col-md-3">
                    @include('layout.sidebar')
                </div> -->


            <div class="content">

                @foreach($products as $product)
                
                    <div class="card bs-card" style="width: 18rem;">
                        <div class="product-img">
                            <img src="{{asset('uploads/' . unserialize($product->images)[0])}}" class="card-img-top image" alt="watch image">
                        </div>
                        <div class="card-body bs-card-body">
                            <h5 class="card-title bs-card-title">{{$product->title}}</h5>
                            <p class="card-text bs-card-text">{{substr($product->content, 0, 50)}}</p>
                        </div>
                        <div class="card-footer bs-card-footer">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-info btn-sm bs-btn ftColor ftColor">Detail</a>
                                <a href="{{ route('addCart', $product->id) }}" class="btn btn-primary btn-sm bs-btn btn-cart"><i class="fas fa-cart-plus"></i></a>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach

            </div>
        </div>
    </div>
    @endsection