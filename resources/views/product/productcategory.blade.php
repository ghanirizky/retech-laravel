@extends('layouts.app')
@section('content')
@section('title', 'ReTech | '.$categoryName)

<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<script src="{{asset('js/category.js')}}"></script>

<!-- Products-->

<section class="products-category mt-2">


    <div class="container">
        <div class="card">
            <div class="card-body">

                <div class="row ml-3">
                    {{-- <h4 class="text-center font-weight-bolder">{{$categoryName}}</h4> --}}
                    <select id="category" class="category align-center mb-3" name="category" class="text-center my-auto" onchange = categoryChange()>
                        
                        <option value="showall">All</option>

                        @foreach ($categories as $category)
                          <option value="{{$category->name}}" 
                            {{strtoupper($category->name) == $categoryName ? 'selected' : ''}}
                            >
                          {{strtoupper($category->name)}}</option>
                        @endforeach
                      </select>
                </div>

                

                @if($products->isEmpty())
                    <h5 class="text-center">Sorry, we don't have that yet</h5>
                @endif

                <div class="col mx-auto">
                    <div class="row">
        
                        @foreach ($products as $product)

        
                            <div class="col-md-3 my-2">
                                <a href="{{ route('product.detail', ['category' => $product->category->name , 'name' => $product->name ]) }}">
                                <div class="card border-secondary rounded-lg">
                                    
                                    <img src="{{ asset("assets/".$product->image) }}" class="card-img-top img-product" style="background-color: #c7c7c78c"  alt="...">
                                    
                                    <div class="card-body">
                                            <h6 class="card-title font-weight-bolder text-dark">RP. {{ $product->price }}</h6>
                                            <a href="{{ route('product.detail', ['category' => $product->category->name , 'name' => $product->name ]) }}"><p class="card-text text-dark elipsis">{{ $product->name}}</p></a>
                                            
                                    </div>

                                    <ul class="list-group list-group-md">
                                        <li class="list-group-item"><h6 class="text-secondary text-right font-weight-light">{{ $product->sold }} terjual</h6></li>
                                    </ul>
                                </a>
        
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>   

                <div class="col text-center">
                    {{$products->links()}}
                </div>

            </div>
        </div>
    </div>

</section>

@endsection
