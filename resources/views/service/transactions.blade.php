@extends('layouts.app')
@section('title', 'Service | Book')
@section('content')

<link rel="stylesheet" href="{{ asset('css/transaction.css') }}">

<section class="history">

    <!-- Tittle -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card container">
                    <div class="card-body">
                        <h4 class="font-weight-bolder text-center">Service Transaction</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- History Table-->
    
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card container">
                    <div class="card-body">
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="title text-center">
                                    <th scope="col">#</th>
                                    <th scope="col" class="date text-left">Date/Time</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Kind</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>


                            <tbody>
                                
                                @foreach ($services as $service)
                                    <tr class = "transaction-history">
                                        
                                        <!-- Index -->
                                        <td>
                                            @php
                                                $index = $index + 1;    
                                            @endphp
                                            <span class="card-title ">{{ $index }}</span>
                                        </td>
                                        

                                        <!-- Booking Date-->
                                        <td class="text-left date"> 
                                            <span class="card-title ">{{ $service->created_at }}</span>
                                        </td>

                                        <td>
                                            <span class="card-title ">{{ $service->status }}</span>
                                        </td>
                                        
                    
                                        <!-- Service address-->
                                        <td class="">
                                            <span class="card-title ">{{ $service->address }}</span>
                                        </td>
                        

                                        <!-- service Type-->
                                        <td class="">
                                            <span class="card-title ">{{ $service->type }}</span>
                                        </td>

                                        <!-- service kind-->
                                        <td class="">
                                            <span class="card-title ">{{ $service->kind }}</span>
                                        </td>

                                        <!-- service desc-->
                                        <td class="">
                                            <span class="card-title ">{{ $service->desc }}</span>
                                        </td>


                                    </tr>
                                @endforeach
                                    
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End History Table -->

</section>

@endsection