@extends('layouts.app')
@section('content')
@section('title', 'ReTech | '.$product->name)

<link rel="stylesheet" href="{{ asset('css/detail.css') }}">

<!-- Link -->

<section class="link" style="color: #4AB8B8;">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card container">
                    <div class="card-body">
                        <a href="{{ route('home') }}">ReTech </a> &nbsp <i class="fa fa-chevron-right panah" aria-hidden="true"></i> &nbsp
                        <a href="{{ route('category.category', $category ) }}">{{ strtoupper($category) }} </a> &nbsp <i class="fa fa-chevron-right panah" aria-hidden="true"></i> &nbsp
                        <a href="">{{ $product->name }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Product Detail -->

<section class="main-detail my-3">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <div class="container">
                            <h4 class="mx-auto font-weight-bolder mb-4">Product</h4>
                            <div class="row">
                                <div class="col-6 md border">
                                    <img src="{{ asset("assets/".$product->image) }}" class="img-fluid" alt="Responsive image">
                                </div>

                                <div class="col-6 md">

                                    <div class="col mx-auto my-auto">
                                        <h3 class="font-weight-bolder"> {{ $product->name }} </h3>
                                        
                                    </div>

                                    <div class="col mx-auto my-auto">
                                        <p>{{ $product->rating }} &nbsp;
                                        @for ($i = 0; $i < $product->rating ; $i++)
                                            <span class="fa fa-star fill"></span>
                                        @endfor
                                        &nbsp; | &nbsp;
                                        {{ $product->sold }} sold
                                        </p>
                                    </div>

                                    <hr class="my-2">

                                    <div class="col mx-auto my-auto">
                                        <p>
                                            <h5 class="font-weight-bolder">Price: &nbsp</h5>
                                            <span>Rp. {{ $product->price }}</span>
                                        </p>
                                    </div>

                                    <hr class="my-2">

                                    <div class="col mx-auto my-auto">
                                        <h5 class="font-weight-bolder">Description: &nbsp</h5>
                                        <p>{{ $product->desc }}</p>
                                    </div>

                                    <hr class="my-2">

                                    <div class="col mx-auto my-auto">
                                        <h5 class="font-weight-bolder">Condition: &nbsp</h5>
                                        <span>{{ $product->condition }}</span>
                                    </div>

                                    <hr class="my-2">

                                    <div class="col mx-auto my-auto">
                                        <h5 class="font-weight-bolder">Color: &nbsp</h5>
                                        <span>{{ $product->color }}</span>
                                    </div>

                                    <hr class="my-2">

                                    <div class="col mx-auto my-auto asd">
                                        <h5 class="font-weight-bolder">Service: &nbsp</h5>
                                        <span>7 days warranty | </span>
                                        <span>100% Original</span>
                                    </div>

                                    <hr class="my-2">

                                    <div class="col">
                                        <form action="{{ route('user.cart.addtocart', $product->id) }}" method="POST"> 
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                    
                                                <label class="col-md-4 col-form-label">Quantity : </label>
                                                
                                                <div class="col-md-4">
                                                    <input type="number" min="1" step="1" value="1" class="form-control @error('quantity') is-invalid @enderror" name="quantity">
                                                    <!-- Error-->
                                                    @error('quantity')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    
                                                </div>
                                                <span class="my-2 mx-auto">Stock: {{ $product->stock }}</span>
                                                
                                                
                                            </div>
                                            <div class="form-group row mt-3">
                                                <div class="col mt-2 text-center">
                                                    <button type="submit" class="btn btn-primary btnDetail mx-3" value="addtocart" name = "button">Add to Cart</button> 
                                                    <button type="submit" class="btn btn-primary btnDetail mx-3" value="buynow" name = "button">Buy Now</button>   
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection
