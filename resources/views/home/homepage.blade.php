@extends('layouts.app')
@section('title', 'ReTech | Shop')

<link rel="stylesheet" href="{{ asset('css/product.css') }}">

@section('content')

    <!--Carousel + Category-->
    @include('include.carousel')
    @include('include.category')


    <!-- Best Seller -->
    <section class="bestseller mt-5">

        <div class="container">
            <div class="card">
                <div class="card-body">

                    <div class="row ml-3">
                        <h4 class="font-weight-bold">Best Seller</h4>
                    </div>

                    <div class="col mx-auto">
                        <div class="row">
            
                            @foreach ($bestSeller as $product)
                                <div class="col-md-3 my-2">
                                    <a href="{{ route('product.detail', ['category' => $product->category->name , 'name' => $product->name ]) }}">
                                        <div class="card border-secondary rounded-lg">
                                            
                                            <img src="{{ asset("assets/".$product->image) }}" class="card-img-top img-product" style="background-color: #c7c7c78c" alt="...">
                                            <div class="card-body">
                                                    <h6 class="card-title font-weight-bolder text-dark">RP. {{ $product->price }}</h6>
                                                    <a href="{{ route('product.detail', ['category' => $product->category->name , 'name' => $product->name ]) }}"><p class="card-text text-dark elipsis">{{ $product->name}}</p></a>
                                                    
                                            </div>
                                            <ul class="list-group list-group-md">
                                                <li class="list-group-item"><h6 class="text-secondary text-right font-weight-light">{{ $product->sold }} terjual</h6></li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                                
                            @endforeach

                        </div>
                    </div>   
                    
                </div>
            </div>
        </div>


    </section>

    <!-- Our Products -->
    <section class="ourproducts mt-5">

        <div class="container">
            <div class="card">
                <div class="card-body">

                    <div class="row ml-3">
                        <h4 class="font-weight-bold">Our Products</h4>
                    </div>

                    <div class="col mx-auto">
                        <div class="row">
            
                            @foreach ($ourProduct as $product)

            
                                <div class="col-md-3 my-2">
                                    <a href="{{ route('product.detail', ['category' => $product->category->name , 'name' => $product->name ]) }}">
                                        <div class="card border-secondary rounded-lg">
                                            
                                            <img src="{{ asset("assets/".$product->image) }}" class="card-img-top img-product" style="background-color: #c7c7c78c" href="{{ route('product.detail', ['category' => $product->category->name , 'name' => $product->name ]) }}" alt="...">
                                            
                                            <div class="card-body">
                                                    <h6 class="card-title font-weight-bolder text-dark">RP. {{ $product->price }}</h6>
                                                    <a href="{{ route('product.detail', ['category' => $product->category->name , 'name' => $product->name ]) }}"><p class="card-text text-dark elipsis">{{ $product->name}}</p></a>
                                                    
                                            </div>

                                            <ul class="list-group list-group-md">
                                                <li class="list-group-item"><h6 class="text-secondary text-right font-weight-light">{{ $product->sold }} terjual</h6></li>
                                            </ul>
                
                                        </div>
                                    </a>
                                </div>
                            @endforeach
            
                        </div>
                    </div>   

                </div>
            </div>
        </div>
    
    </section>




@endsection
