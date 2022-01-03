@extends('layouts.app')
@section('title', 'ReTech | Payment')
@section('content')



<link rel="stylesheet" href="{{ asset('css/detail.css') }}">

<!-- Link -->
<section class="link">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card container">
                    <div class="card-body">
                        <a href="{{ route('home') }}">ReTech </a> &nbsp <i class="fa fa-chevron-right panah" aria-hidden="true"></i> &nbsp
                        <a href="{{ route('user.cart') }}">Cart</a> &nbsp <i class="fa fa-chevron-right panah" aria-hidden="true"></i> &nbsp
                        <a href="">Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Body -->


<!-- Product -->
@if ($t_type == 'buynow')
<form action="{{ route('transaction.pay', ['id' => $user_id , 't_type' => $t_type , 'productid' => $product_id, 'qty' => $quantity]) }}" method="post">
@else
<form action="{{ route('transaction.pay', ['id' => $user_id , 't_type' => $t_type, 'productid' => 'None', 'qty' => 'None']) }}" method="post">
@endif

    {{ csrf_field() }}
    <section class="main-content mt-3 mx-auto">
        <section class="product-"></section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card container">
                        <div class="card-body">
                            
                            <table class="table table-hover">
                                <thead>
                                    <tr class="title">
                                
                                        <th scope="col">Product</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
                                </thead>

                                @php
                                    $totalprice = 18000
                                @endphp

                                <tbody>
                                    @foreach ($carts as $product)
                                        @php
                                            if($t_type == 'buynow'){
                                                $subtotal = $product->price * $quantity;
                                            }else{
                                                $subtotal = $product->price * $product->quantity;
                                            }
                                            
                                            $totalprice = $totalprice + $subtotal;
                                        @endphp

                                        <tr class="pay-contents">
                                            <td style="width:200px">
                                                @if ($t_type == 'buynow')
                                                    <img src="{{ asset('assets/'.$product->image) }}" class="img-fluid pay-img"  alt="Responsive image">
                                                @else
                                                    <img src="{{ asset('assets/'.$product->product->image) }}" class="img-fluid pay-img"  alt="Responsive image">
                                                @endif
                                                
                                                
                                            </td>
                                            
                                            <td>
                                                @if ($t_type == 'buynow')
                                                    <span  class="card-title font-weight-bolder">{{ ($product->name) }}</span>
                                                @else
                                                    <span  class="card-title font-weight-bolder">{{ ($product->product->name) }}</span>
                                                @endif
                                                
                                            </td>
                                            
                                            <td>Rp. {{$product->price}}</td>
                                            
                                            @if ($t_type == 'buynow')
                                                <td>{{ $quantity }}</td>
                                            @else
                                                <td>{{ $product->quantity }}</td>
                                            @endif
                                            
                                            <td>Rp. {{ $subtotal }}</td>
                                        </tr>

                                    @endforeach

                                    <tr class = "title pay-contents">
                                        <td><span  class="card-title font-weight-bolder">Shipping Options</span></td>

                                        <td class="pay-contents" colspan="3">
                                            <select class="form-control" name="ongkir" onchange="val()" id="select_id">
                                                <option value="18000">Regular</option>
                                                <option value="30000">Next Day</option>
                                            </select>
                                        </td>

                                        <td id="ongkir_price">
                                            Rp. 18000
                                        </td>

                                    </tr>

                                    <tr >

                                        <td class="totalprice font-weight-bolder" colspan="4"> Total Price</td>
                                        <td class="title font-weight-bolde" style="color: #4AB8B8" id="totalprice">Rp. {{ $totalprice }}</td>
                                        
                                    </tr>
                                        
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Product -->
    </section>


<!-- Payment Method -->
    <section class="main-content mt-3 mx-auto">
        <section class="product-"></section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card container">
                        <div class="card-body">
                            
                            <table class="table table-hover">
                                <thead>
                                    <tr class="title">
                                        
                                        <th>Payment Method</th>
                                        <th colspan="4" scope="col">Virtual Account</th>
                                    </tr>
                                </thead>

        
                                <!-- Payment Method-->
                                <tbody>

                                    @include('transaction.paymentmethod')
                                    
                                </tbody>
                            </table>

                            <div class="col text-center">
                                <hr>
                                <button type="submit" class="btn btn-primary text-center mx-2" style="background-color: #124E61; width: 150px" value="pay">Pay</button>
                                <a href="{{ route('home') }}" class="btn btn-outline-dark btnCancel" style="width: 150px; border-color: #124E61;  ">Cancel</a> 
                            </div>
                                <!-- End Method-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product -->
    </section>

</form>


<script type="text/javascript">
    
    function val() {
    d = document.getElementById("select_id").value;
    document.getElementById("ongkir_price").innerHTML = "Rp.  " + d

    var tot = "<?php echo $totalprice ?>";
    var finaltotalprice = Number(tot) + Number(d)
    
    document.getElementById("totalprice").innerHTML = "Rp.  " + finaltotalprice
    }
    
</script>






@endsection