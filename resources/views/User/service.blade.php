@extends('User.Ulayout.main')
@section('maincontainer')


   <!-- Service Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6">Services</h1>
            <p class="text-primary fs-5 mb-5">Buy, Sell And Exchange Cryptocurrency</p>
        </div>
       
        <div class="row g-4">
            @foreach($con as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light p-5">
                    <h5 class="mb-3">{{$item->name}}</h5>
                    <p>{{$item->desc}}</p>
                    <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div> 
            @endforeach  
        </div>
        
    </div>
    
</div>
<!-- Service End -->
@endsection