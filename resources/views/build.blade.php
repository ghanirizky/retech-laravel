@extends('layouts.app')
@section('title', 'ReTech | Build')
@section('content')

<link rel="stylesheet" href="{{ asset('css/build.css') }}">

    <!-- Carousel -->
    @include('include.carousel')


    <!--Build Page -->
        <!-- Title -->
<section class="build-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card container">
                    <div class="card-body">
                        <h4 class="font-weight-bolder text-center">Build Your PC</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Title -->

        <!-- Main Content -->

        <form action="{{ route('build.pay.page') }}" method="GET">
            {{ csrf_field() }}
            <section class="main-content mt-1 mx-auto">
                
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
                                                        <span class="card-title ">{{ $index }}</span>

                                                    </td>
                                                    
                                                    <!-- Parts Name-->
                                                    
                                                    <td class="text-left"> 
                                                        
                                                        <span class="card-title ">{{ (strtoupper($part->name)) }}</span>
                                                    </td>
                                                        
                                                    <!-- End Parts Name-->
                                                    
                                                    <!-- Parts Choices-->
                                                    <td class="choices" style="width:500px">
                                                        @php
                                                            $part_name = str_replace(' ', '', $part->name);
                                                        @endphp
                                                        <select class="form-control" name="{{ $part_name }}" id="select_id">

                                                            @foreach ($part->product as $choice)
                                                                <option value="{{ $choice->id }}">{{ $choice->name }}  &nbsp; - &nbsp;Rp. &nbsp;{{ $choice->price }}</option>
                                                            @endforeach

                                                        </select>
                                                    </td>
                                                    <!-- End Parts Choices-->
                                                    
                                                    <!-- Quantity -->
                                                    <td class="qty">
                                                            
                                                            <input placeholder="Max 100" type="number" min="1" step="1" max="100" class="form-control" name="{{ $part_name }}_qty" required>
                                                            
                                                            
                                                            
                                                        
                                                    </td>

                                                    <!-- End Quantity -->
            
                                                </tr>
                                            @endforeach
                                                
                                        </tbody>
                                    </table>

                                    <div class="col text-right">
                                        <hr>
                                        <a href="{{ route('build.page') }}" class="btn btn-outline-dark btnBuild mx-1">Reset</a> 
                                        <button type="submit" class="btn btn-outline-dark btnBuild" value="next">Next</button>
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