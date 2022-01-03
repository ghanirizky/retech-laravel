<!-- Categories -->
<link rel="stylesheet" href="{{ asset('css/category.css') }}">



<section class="categories mt-5">

    <div class="container-sm">
        <div class="card">
            <div class="card-body">
                <div class="row text-left ml-3">
                    <h4 class="font-weight-bold">Categories</h4>
                </div>

                <div class="row mt-2 justify-content-center" style="margin-bottom: -10px">

                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      
                          <div class="carousel-inner">
          
                              <div class="carousel-item active">
                                      <!-- Card Deck -->
                                    <div class="card-deck text-center mx-2">

                                          <div class="card border-light my-2">
                                            <a href="{{ route('category.category', 'showall') }}"><img src="{{ asset('assets\Icon\showall.svg') }}" class="card-img-top border border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                              <div class="card-body">
                                                <h6 class="card-title d-sm-none d-md-none d-lg-block">Show All</h6>
                                              </div>
                                          </div>

                                          <div class="card border-light my-2">
                                              <a href="{{ route('category.category', 'laptop') }}"><img src="{{asset('assets\Icon\laptop.svg')}}" class="card-img-top border border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                                <div class="card-body">
                                                  <h6 class="card-title d-sm-none d-md-none d-lg-block">Laptop</h6>
                                                </div>
                                          </div>

                                          <div class="card border-light my-2">
                                              <a href="{{ route('category.category', 'processor') }}"> <img src="{{asset('assets\Icon\processor.svg')}}" class="card-img-top  border border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                                <div class="card-body">
                                                  <h6 class="card-title d-sm-none d-md-none d-lg-block">Processor</h6>
                                                </div>
                                          </div>

                                          <div class="card border-light my-2">
                                              <a href="{{ route('category.category', 'motherboard') }}"><img src="{{asset('assets\Icon\motherboard.svg')}}" class="card-img-top border  border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                                <div class="card-body">
                                                  <h6 class="card-title d-sm-none d-md-none d-lg-block">Motherboard</h6>
                                                </div>
                                          </div>

                                          <div class="card border-light my-2">
                                              <a href="{{ route('category.category', 'vga') }}"><img src="{{asset('assets\Icon\vga.svg')}}" class="card-img-top border border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                                <div class="card-body">
                                                  <h6 class="card-title d-sm-none d-md-none d-lg-block">VGA</h6>
                                                </div>
                                          </div>

                                          <div class="card border-light my-2">
                                              <a href="{{ route('category.category', 'ssd') }}"><img src="{{asset('assets\Icon\ssd.svg')}}" class="card-img-top border border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                                <div class="card-body">
                                                  <h6 class="card-title d-sm-none d-md-none d-lg-block">SSD</i></h6>
                                                </div>
                                          </div>

                                    </div>
                                    <!-- End Card Deck -->
                              </div>

                              <div class="carousel-item">
                                  <!-- Card Deck -->
                                  <div class="card-deck text-center mx-2">

                                      <div class="card border-light my-2">
                                        <a href="{{ route('category.category', 'hard disk') }}"><img src="{{ asset('assets\Icon\hdd.svg') }}" class="card-img-top border border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                          <div class="card-body">
                                            <h6 class="card-title d-sm-none d-md-none d-lg-block">Hard Disk</h6>
                                          </div>
                                      </div>

                                      <div class="card border-light my-2">
                                          <a href="{{ route('category.category', 'ram') }}"><img src="{{asset('assets\Icon\ram.svg')}}" class="card-img-top border border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                            <div class="card-body">
                                              <h6 class="card-title d-sm-none d-md-none d-lg-block">RAM</h6>
                                            </div>
                                      </div>

                                      <div class="card border-light my-2">
                                          <a href="{{ route('category.category', 'monitor') }}"> <img src="{{asset('assets\Icon\desktop 1.svg')}}" class="card-img-top  border border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                            <div class="card-body">
                                              <h6 class="card-title d-sm-none d-md-none d-lg-block">Monitor</h6>
                                            </div>
                                      </div>

                                      <div class="card border-light my-2">  
                                          <a href="{{ route('category.category', 'mouse') }}"><img src="{{asset('assets\Icon\computer-mouse.svg')}}" class="card-img-top border  border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                            <div class="card-body">
                                              <h6 class="card-title d-sm-none d-md-none d-lg-block">Mouse</h6>
                                            </div>
                                      </div>

                                      <div class="card border-light my-2">
                                          <a href="{{ route('category.category', 'headset') }}"><img src="{{asset('assets\Icon\headset 1.svg')}}" class="card-img-top border border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                            <div class="card-body">
                                              <h6 class="card-title d-sm-none d-md-none d-lg-block">Headset</h6>
                                            </div>
                                      </div>

                                      <div class="card border-light my-2">
                                          <a href="{{ route('category.category', 'keyboard') }}"><img src="{{asset('assets\Icon\keyboard.svg')}}" class="card-img-top border border-secondary rounded-circle" style="background-color: #f1f1f1" alt="..."></a>
                                            <div class="card-body">
                                              <h6 class="card-title d-sm-none d-md-none d-lg-block">Keyboard</i></h6>
                                            </div>
                                      </div>

                                  </div>
                              <!-- End Card Deck -->
                              </div>
                      
                          </div>
                  
                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                  
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                      </div>

                </div>
            </div>
        </div>
    </div>


</section>