@extends('layouts.app')
@section('title', 'Transaction | History')
@section('content')

<link rel="stylesheet" href="{{ asset('css/transaction.css') }}">

<section class="history">

    <!-- Tittle -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card container">
                    <div class="card-body">
                        <h4 class="font-weight-bolder text-center">Transaction History</h4>
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
                                    <th scope="col">Type</th>
                                    <th scope="col">Shipping Type</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>


                            <tbody>
                                
                                @foreach ($transactions as $transaction)
                                    <tr class = "transaction-history">
                                        
                                        <!-- Index -->
                                        <td>
                                            @php
                                                $index = $index + 1;    
                                            @endphp
                                            <span class="card-title ">{{ $index }}</span>
                                        </td>
                                        

                                        <!-- Transactions Date-->
                                        <td class="text-left date"> 
                                            <span class="card-title ">{{ $transaction->created_at }}</span>
                                        </td>
                                        
                    
                                        <!-- Transaction Type-->
                                        <td class="">
                                            <span class="card-title ">{{ $transaction->type }}</span>
                                        </td>
                        

                                        <!-- Shipping Type-->
                                        <td class="">
                                            <span class="card-title ">{{ $transaction->shipping_type }}</span>
                                        </td>

                                        <!-- Shipping Type-->
                                        <td class="">
                                            <span class="card-title ">Rp. &nbsp;{{ $transaction->total_price }}</span>
                                        </td>

                                        <!-- Shipping Type-->
                                        <td class="">
                                            <span class="card-title ">{{ $transaction->payment_method }}</span>
                                        </td>

                                        <!--Detail-->

                                        <td>
                                            <a href="{{ route('transaction.detail.page', $transaction->id) }}" class="btn btn-outline-dark btnBuild mx-1">Detail</a>  
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