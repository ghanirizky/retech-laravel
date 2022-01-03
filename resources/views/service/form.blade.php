@extends('layouts.app')
@section('title', 'ReTech | Service')
@section('content')

<link rel="stylesheet" href="{{ asset('css/build.css') }}">

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
                        <h4 class="font-weight-bolder text-center">Service Form</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Title -->

        <!-- Main Content -->

        <form action="{{ route('service.payment')}}" method="GET">
            {{ csrf_field() }}
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
                                                <td>
                                                    1
                                                </td>   

                                                <td>
                                                    Address (City)
                                                </td>

                                                <td>
                                                    <select class="form-control" name="address" id="select_id">

                                                        <option value="Jakarta Utara">Jakarta Utara</option>
                                                        <option value="Jakarta Barat">Jakarta Barat</option>
                                                        <option value="Jakarta Timur">Jakarta Timur</option>
                                                        <option value="Jakarta Pusat">Jakarta Pusat</option>
                                                        <option value="Jakarta Selatan">Jakarta Selatan</option>
                                                        <option value="Tanggerang">Tanggerang</option>
                                                        <option value="Depok">Depok</option>
                                                        <option value="Bekasi">Bekasi</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <!-- End Address -->


                                            <!-- Service Type -->
                                            <tr>
                                                <td>
                                                    2
                                                </td>

                                                <td>
                                                    What type of service do you want
                                                </td>

                                                <td>
                                                    <select class="form-control" name="service_type" id="select_id">

                                                        <option value="Light Service">Light Service</option>
                                                        <option value="Heavy Service">Heavy Service</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <!-- End Service Type -->

                                            <!-- Service Where -->
                                            <tr>
                                                <td>
                                                    3
                                                </td>

                                                <td>
                                                    What kind of service do you want
                                                </td>

                                                <td>
                                                    <select class="form-control" name="service_kind" id="select_id">
                                                        <option value="Store Service">Store Service</option>
                                                        <option value="Home Service">Home Service</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <!--End Service Where -->


                                            <!-- Description of service -->

                                            <tr>
                                                <td>
                                                    5
                                                </td>

                                                <td>
                                                    Please describe the damage or service do you want
                                                </td>

                                                <td>
                                                    <div class="form-group">
                                                        <textarea class="form-control @error('service_desc') is-invalid @enderror" id="service_desc" name="service_desc" rows="3" required  ></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- End Description of service -->

                                            <!-- When was the last time you do services -->

                                            <tr>
                                                <td>
                                                    5
                                                </td>

                                                <td>
                                                    When was the last time you do services
                                                </td>

                                                <td>
                                                    <select class="form-control" name="last_time">
                                                        <option value="Last Week">Last Week</option>
                                                        <option value="Last Month">Last Month</option>
                                                        <option value="> 3 Months">> 3 Months</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <!-- End When was the last time you do services -->


                                            
                                                
                                        </tbody>
                                    </table>
                                    {{-- @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif --}}
                                    <div class="col text-right">
                                        
                                        <hr>
                                        <a href="{{ route('service.form') }}" class="btn btn-outline-dark btnBuild mx-1">Reset</a> 
                                        <button type="submit" class="btn btn-outline-dark btnBuild" value="next">Next</button>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!-- End Product -->
            </section>

        </form>


        <!-- End Main Content -->
</section>

    <!--End Build Page -->

    

@endsection