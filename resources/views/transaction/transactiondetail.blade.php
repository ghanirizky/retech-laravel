@extends('layouts.app')
@section('title', 'Transaction | Detail')
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
                        <a href="{{ route('transaction.history.page') }}">Transaction History</a> &nbsp <i class="fa fa-chevron-right panah" aria-hidden="true"></i> &nbsp
                        <a href="">Transaction Detail</a> &nbsp
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="trans-detail">
    <!-- Tittle -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card container">
                    <div class="card-body text-center">
                        <h4 class="font-weight-bolder">Transaction Detail</h4>
                        <hr>

                        <div class="col">
                            <p class="header-detail">
                                {{-- <a href="" class="btn btn-outline-dark btnBuild mx-5 back">Back</a>  --}}
                                <span>Date: &nbsp;{{ $date }}</span> 
                                    &nbsp;|&nbsp; 
                                <span>Total Price: &nbsp; Rp. &nbsp;{{ $totalprice }}</span>
                                {{-- <a href="" class="btn btn-outline-dark btnBuild mx-5 home">Home</a>  --}}
                            </p>
                        </div>

                        <!-- Detail Table-->
                        <table class="table table-hover">
                            <thead>
                                <tr class="title text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>


                            <tbody>
                                
                                @foreach ($transactions as $product)
                                    @php
                                        $subtotal = $product->price * $product->quantity;
                                    @endphp

                                    <tr class="pay-contents">

                                        <td>
                                            @php
                                                $index = $index + 1;    
                                            @endphp
                                            <span class="card-title ">{{ $index }}</span>
                                        </td>
                                        <td style="width:200px">
                                            <img src="{{ asset('assets/'.$product->product->image) }}" class="img-fluid pay-img"  alt="Responsive image">
                                        </td>
                                        
                                        <td>
                                            <span  class="card-title font-weight-bolder">{{ ($product->product->name) }}</span>
                                        </td>
                                        
                                        <td>Rp. {{$product->price}}</td>
                                        
                                        <td>{{ $product->quantity }}</td>
                                        
                                        <td>Rp. {{ $subtotal }}</td>
                                    </tr>

                                @endforeach
                                    
                            </tbody>
                        </table>
                         <!-- End Detail Table -->
                        {{-- <div class="col">
                            <a href="{{}}" class="btn btn-outline-dark btnBuild mx-1">Back</a>  
                        </div> --}}
                    </div>
                 
                </div>
            </div>
        </div>
    </div>


    

</section>
@endsection