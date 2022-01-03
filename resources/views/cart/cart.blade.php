@extends('layouts.app')
@section('title', 'ReTech | Cart')

@section('content')

<section class="cart mt-2">

    <div class="container">
        <div class="card">
            <div class="card-body">

                <div class="row ml-3">
                    <h4 class="text-center font-weight-bolder">Cart</h4>
                </div>

                
                @if($carts->isEmpty())
                
                    <h5 class="text-center">Cart is Empty !!</h5>
                    <hr>
                @else
                    
                    <!-- Cart-Content-->

                    @php
                        $totalprice = 0;   
                    @endphp

                    <div class="col mx-auto">
                        <div class="row">
            
                            @foreach ($carts as $product)

            
                                <div class="col-md-4 my-2">
                                    <div class="card border-secondary rounded-lg">
                                        
                                        @php
                                            $subtotal = $product->price * $product->quantity;
                                            $totalprice = $totalprice + $subtotal;
                                        @endphp
                                        
                                        <div class="card-body text-center">
                                            <div class="col">
                                                <img src="{{ asset("assets/".$product->product->image) }}" class="card-img-top" style="background-color: #c7c7c78c">
                                                <h6 class="card-title font-weight-bolder">{{ ($product->product->name) }}</h6>
                                            </div>
                                            <hr>
                                            
                                            <div class="col">
                                                <h6 class="card-title font-weight-bolder">Price: &nbsp RP. &nbsp{{ ($product->price) }}</h6>
                                            </div>

                                            <div class="col">
                                                <h6 class="card-title font-weight-bolder">Quantity: &nbsp{{ $product->quantity }}</h6>
                                            </div>

                                            <hr>
                                            <div class="col">
                                                <h6 class="card-title font-weight-bolder">Subtotal: &nbsp RP. &nbsp{{ $subtotal }}</h6>
                                            </div>

                                            <hr>
                                            <div class="col text-center my-2 mx-auto">
                                                <a href="{{ route('user.cart.editpage', $product->product_id) }}" class=" btn btn-primary mx-2" style="background-color: #124E61">Edit Item</a>
                                                <a href="{{ route('user.cart.remove', $product->product_id) }}" class=" btn btn-primary mx-2" style="background-color: #124E61">Remove</a>
                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>

                            @endforeach

                        </div>

        
                        <div class="col text-xs-center">
                            {{$carts->links()}}
                        </div>

                        <div class="col text-right">
                            <hr>
                            <a href="{{ route('transaction.payment.page', $user_id) }}" class="text-right btn btn-primary mx-2" style="background-color: #124E61">Checkout</a>
                        </div>

                    </div>   
                    
                    <!-- End Cart-Content-->

                @endif
            </div>
        </div>
    </div>

</section>

@endsection