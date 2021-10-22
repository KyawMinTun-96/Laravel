@extends('layout.master')
@section('title', 'Home Page')
@section('content')



    <!---------------- cart details ----------------->
    <div class="cart_details">
        <div class="container">
            <div class="col-lg-12">
                <table id="cart" class="table table-hover table-condensed cart_table">
    				<thead>
						<tr>
							<th style="max-width:45%">Product</th>
							<th style="width:20%">Price</th>
							<th style="width:10%">Quantity</th>
							<th style="width:10%" class="text-center">Subtotal</th>
							<th style="max-width:15%" class="text-center">action</th>
						</tr>
					</thead>
					<tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <div class="d-flex flex-row justify-content-start product_name">

                                        <div class="me-2 product_img">
                                            <img src="{{asset('uploads/'. unserialize($product->images)[0])}}" alt="..." class="img-responsive"/>
                                        </div>

                                        <div class="">
                                            <h4>{{$product->title}}</h4>
                                            <p>{{substr($product->content, 0, 30)}}</p>
                                        </div>

                                    </div>
                                </td>

                                <td class="product_price">{{$product->price}}&nbsp;mmk</td>

                                <td>
                                    <input type="number" class="form-control text-center product_qty" value="1" min="1" max="100" step="1">
                                </td>

                                <td class="text-center product_subtotal">1.99</td>

                                <td class="text-center">
                                    <button class="btn btn-danger btn-sm remove_btn">
                                        <i class="far fa-trash-alt"></i>
                                    </button>			
                                </td>
                            </tr>
                            @endforeach
					</tbody>
					<tfoot>
						<tr>
							<td>
                                <a href="#" class="btn btn-warning shopping_btn">
                                    <i class="fa fa-angle-left"></i> Continue Shopping
                                </a>
                            </td>
                            <td></td>
                            <td></td>

							<td class="text-center">
                                <strong>Total $1.99</strong>
                            </td>
                            
                            
							<td>
                                <a href="#" class="btn btn-success d-block checkout_btn">Checkout <i class="fa fa-angle-right"></i>
                                </a>
                            </td>
						</tr>
					</tfoot>
	            </table>
            </div>
        </div>
    </div>


    @endsection