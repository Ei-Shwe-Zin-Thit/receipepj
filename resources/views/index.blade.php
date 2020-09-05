@extends('mainlayout.master')

@section('content')

    <div class="row card-deck">


        @foreach ($recipe as $value)
            
        <div class="col-lg-3 col-sm-10 col-md-6">
        <div class="card">
        <img src="{{asset('image/'.$value['img'])}}" class="card-img-top" alt="...">
          <div class="card-body">
           <h5 class="card-text text-dark font-weight-bold">{{$value['name']}}</h5><br>
           <a class="text-muted"><i class="fa fa-fire mr-3"></i>{{$value['time']}}</a><br>
           <a class="text-muted"><i class="fa fa-bars mr-3"></i>{{$value['publisher']}}</a><br>
           <a class="text-muted"><i class="fa fa-user mr-3"></i>1125 Views</a><br>
           <a href="{{url('cooking/'.$value['id'])}}" class="mt-3 btn btn-outline-danger text-center">View More</a>
           </div>
       </div>
       </div>

       @endforeach

        {{-- {{-- <div class="col-lg-3 col-sm-10 col-md-6">
        <div class="card">
        <img src="images/burger.jpg" class="card-img-top" alt="...">
          <div class="card-body">
           <h5 class="card-text text-dark font-weight-bold">Classic Hamburger</h5><br>
           <a class="text-muted"><i class="fa fa-fire mr-3"></i>1 Hours</a><br>
           <a class="text-muted"><i class="fa fa-bars mr-3"></i>6 Integrents</a><br>
           <a class="text-muted"><i class="fa fa-user mr-3"></i>1125 Views</a><br>
           <a href="menu_page.html" class="mt-3 btn btn-outline-danger text-center">View More</a>
           </div>
       </div>
       </div> --}}


        {{-- <div class="col-lg-3 col-sm-10 col-md-6">
        <div class="card">
        <img src="images/burger.jpg" class="card-img-top" alt="...">
          <div class="card-body">
           <h5 class="card-text text-dark font-weight-bold">Classic Hamburger</h5><br>
           <a class="text-muted"><i class="fa fa-fire mr-3"></i>1 Hours</a><br>
           <a class="text-muted"><i class="fa fa-bars mr-3"></i>6 Integrents</a><br>
           <a class="text-muted"><i class="fa fa-user mr-3"></i>1125 Views</a><br>
           <a href="menu_page.html" class="mt-3 btn btn-outline-danger text-center">View More</a>
           </div>
       </div>
       </div> --}}


     </div>

@endsection


@section('newsletter')
    
    <div data-aos="fade-up" data-aos-duration="2000">
        <section class="contact-area">
        <div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form col-6" method="post" action="{{url('/create')}}">
            {{csrf_field()}}
        <span class="contact100-form-title">
            NewsLetter
        </span>


        <div class="wrap-input100 validate-input" data-validate="Name is required">
            <input id="name" class="input100" type="text" name="name" placeholder="Enter your name...">
            <span class="focus-input100"></span>
        </div>


        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input id="email" class="input100" type="text" name="email" placeholder="Enter your email...">
            <span class="focus-input100"></span>
        </div>

        

        <div class="wrap-input100 validate-input" data-validate = "Message is required">
            
            <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
            <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" value="submit">
            Send
            </button>
        </div>
        </form>

        <div class="contact100-more flex-col-c-m col-6" style="background-image: url('images/a.jpg');">
        </div>
    </div>
    </div>


@endsection