@extends('layouts.app')
@section('title', 'ReTech | Build')
@section('content')

<link rel="stylesheet" href="{{ asset('css/build.css') }}">

    <!-- Carousel -->
    @include('include.carousel')


    <!--Build Page -->
        <!-- Title -->
<section class="simulation-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card container">
                    <div class="card-body">
                        <h4 class="font-weight-bolder text-center">Simulation for Build Your PC</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Title -->

        <!-- Main Content -->

        <form action="" method="post">
            {{ csrf_field() }}
            <section class="main-content mt-1 mx-auto">
                <section class="product-"></section>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card container">
                                <div class="card-body">
                                    
                                    <table class="table table-hover">
                                        <thead>
                                            <tr class="title build-contents">
                                                <th scope="col">#</th>
                                                <th scope="col" class="text-left">Parts</th>
                                                <th scope="col">Choices</th>
                                                <th scope="col">Quantity</th>
                                            </tr>
                                        </thead>

        
                                        <tbody>
                                            
                                            @foreach ($parts as $part)
                                                <tr class = "build-contents">
                                                    
                                                    <td>
                                                        @php
                                                            $index = $index + 1;    
                                                        @endphp
                                                        <span class="card-title">{{ $index }}</span>

                                                    </td>
                                                    
                                                    <!-- Parts Name-->
                                                    <td class="text-left"> 
                                                        <span class="card-title ">{{ strtoupper($part->name) }}</span>
                                                    </td>
                                                        
                                                    <!-- End Parts Name-->
                                                    
                                                    <!-- Parts Choices-->
                                                    <td class="choices" style="width:500px">
                                                        <select class="form-control" name="choice" id="select_id">

                                                            @foreach ($part->product as $choice)
                                                                <option value="18000">{{ $choice->name }}  &nbsp; - &nbsp;Rp. &nbsp;{{ $choice->price }}</option>
                                                            @endforeach

                                                        </select>
                                                    </td>
                                                    <!-- End Parts Choices-->
                                                    
                                                    <!-- Quantity -->
                                                    <td class="qty">

                                                        
                                                            <input placeholder="Max 100" max="100" type="number" min="1" step="1" max="" class="form-control @error('quantity') is-invalid @enderror" name="quantity" >
                                                            <!-- Error-->
                                                            @error('quantity')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            
                                                        
                                                    </td>

                                                    <!-- End Quantity -->
            
                                                </tr>
                                            @endforeach
                                                
                                        </tbody>
                                    </table>

                                    <div class="col text-right">
                                        <hr>
                                        <a href="{{ route('simulation.page') }}" class="btn btn-outline-dark btnBuild mx-1">Reset</a> 
                                        <button type="submit" class="btn btn-outline-dark btnBuild" value="next" disabled >Next</button>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- End Product -->
            </section>

        </form>


        <!-- End Main Content -->
</section>

    <!--End Build Page -->

    

@endsection