@extends('layouts.app')
@section('title', 'Service | Payment')
@section('content')

<link rel="stylesheet" href="{{ asset('css/service.css') }}">

   <!-- Carousel -->
   @include('include.carousel')


    <!--Build Page -->
        <!-- Title -->
<section class="service-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card container">
                    <div class="card-body">
                        <h4 class="font-weight-bolder text-center">Service Detail</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Title -->

        <!-- Main Content -->

        @php
            // dd($service['address'])
        @endphp

        
            <section class="main-content mx-auto mt-1">
                <section class="product">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card container">
                                <div class="card-body">
                                    
                                    <table class="table table-hover">
                                
                                        <tbody>
                                            <!-- Address -->
                                            <tr>
                                                <td class="index">
                                                    1
                                                </td>   

                                                <td class="title">
                                                    Address (City)
                                                </td>

                                                <td>
                                                    {{ $service['address'] }}
                                                </td>
                                            </tr>
                                            <!-- End Address -->


                                            <!-- Service Type -->
                                            <tr>
                                                <td class="index">
                                                    2
                                                </td>

                                                <td class="title">
                                                    Service Type
                                                </td>

                                                <td>
                                                    {{ $service['type'] }}
                                                </td>
                                            </tr>
                                            <!-- End Service Type -->

                                            <!-- Service Kind -->
                                            <tr>
                                                <td class="index">
                                                    3
                                                </td>

                                                <td class="title">
                                                    What kind of service do you want
                                                </td>

                                                <td>
                                                    {{ $service['kind'] }}
                                                </td>
                                            </tr>
                                            <!--End Service Kind -->


                                            <!-- Description of service -->

                                            <tr>
                                                <td class="index">
                                                    4
                                                </td >

                                                <td class="title">
                                                    Service Description
                                                </td>

                                                <td>
                                                    {{ $service['desc'] }}
                                                </td>
                                            </tr>
                                            <!-- End Description of service -->

                                            <!-- When was the last time you do services -->

                                            <tr>
                                                <td class="index">
                                                    5
                                                </td>

                                                <td class="title">
                                                    Last Time Service
                                                </td>

                                                <td>
                                                    {{ $service['last_time'] }}
                                                </td>
                                            </tr>

                                            <!-- End When was the last time you do services -->


                                            
                                                
                                        </tbody>
                                    </table>

                                    <div class="col text-center">
                                        <hr> 
                                        {{-- <form action="{{ route('service.book')}}" method="POST"> --}}
                                            {{-- {{ csrf_field() }} --}}
                                            {{-- @php
                                                $serializeArray = serialize($service);
                                            @endphp --}}
                                            <a class="btn btn-outline-dark btnBook" href="{{ route('service.book', $service ) }}" >Book</a>
                                            {{-- <input type="hidden" name="service" value= {{$service}}/>
                                            <button  class="btn btn-outline-dark btnBook" type="submit">Book</button> 
                                        </form> --}}
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!-- End Product -->
            </section>

       


        <!-- End Main Content -->
</section>

    <!--End Build Page -->

    

@endsection