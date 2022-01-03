@extends('layouts.app')
@section('title', 'ReTech | Edit Cart')

@section('content')

<section class="main-detail my-3">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <div class="container">
                            <h4 class="mx-auto font-weight-bolder mb-4">Edit Cart Item</h4>
                            <div class="row">

                                <div class="col-6 md border">
                                    <img src="{{ asset('assets/'.$product->product->image) }}" class="img-fluid" alt="Responsive image">
                                </div>

                                <div class="col-6 md">

                                    <div class="col mx-auto my-auto">
                                        <h3 class="font-weight-bolder"> {{ $product->product->name }} </h3>
                                    </div>


                                    <div class="col mx-auto my-auto">
                                        <p>{{ $product->product->rating }} &nbsp;
                                        @for ($i = 0; $i < $product->product->rating ; $i++)
                                            <span style="color: orange" class="fa fa-star fill"></span>
                                        @endfor
                                        &nbsp; | &nbsp;
                                        {{ $product->product->sold }} sold
                                        </p>
                                    </div>

                                    <hr class="my-2">

                                    <div class="col mx-auto my-auto">
                                        <h5 class="font-weight-bolder">Description: &nbsp</h5>
                                        <p>{{ $product->product->desc }}</p>
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
                                        @php
                                            $subtotal = $product->price * $product->quantity
                                        @endphp
                                        <p>
                                        <h5 class="font-weight-bolder">Subtotal Price: &nbsp</h5>
                                        <span>Rp. {{$product->price}} &nbsp; x &nbsp; {{$product->quantity}} &nbsp; =  &nbsp;</span>  <span class="font-weight-bolder" style="color:  #4AB8B8"> Rp. {{ $subtotal }}</span> 
                                        </p>
                                    </div>

                                    <hr class="my-2">

                                    <div class="col">
                                        <form action="{{ route('user.cart.edit', $product->product->id) }}" method="POST"> 
                                            
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Quantity : </label>
                                                
                                                <div class="col-md-4">
                                                    <input type="number" min="1" step="1"  class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ $product->quantity }}">
                                                    <!-- Error-->
                                                    @error('quantity')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    
                                                </div>
                                                <span class="my-2 mx-auto">Stock: {{ $product->product->stock }}</span>
                                            </div>

                                            <hr class="my-2">

                                            <div class="form-group row mt-3">
                                                <div class="col mt-2 text-center">
                                                    <button type="submit" class="btn btn-primary btnDetail mx-3" style="background-color:  #124E61;" value="Edit" name = "Edit">Edit Item</button>
                                                    <a href="{{ route('user.cart') }}" class="btn btn-outline-dark btnBuild mx-1">Cancel</a>  
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