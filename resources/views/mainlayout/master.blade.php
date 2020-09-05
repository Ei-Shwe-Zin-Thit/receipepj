@include('mainlayout.header')

<div data-aos="zoom-in" data-aos-duration="2000">
     <section class="menu menu-section p-5" style="background-color: #d0333c;" id="menus">
       <div class="food-area ">
          <h1 class="text-center mb-5 text-gray-dark font-weight-bold mt-5">Menus</h1>

            @yield('content')

         
       </div>
   <div class="row"> <a href="{{url('cook')}}" class="text-center mx-auto btn btn-outline-white font-weight-bold mt-5 mb-5">View All Receipies</a></div>
  </section>
</div>
   
   <div class="about"data-aos="fade-right" data-aos-duration="2000" id="abouts">
     <section class="bg-white p-5">
     <div class="container">
     <div class="row">
      <div class="col-6">
        <h2 class="text-danger font-italic font-weight-bold mb-5">About</h2>
        <p class="text-justify text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" style="border-radius: 50%;border:5px solid black;" src="images/i1.jpg" alt="About Main Image">
                            <img class="about-inset" style="border-radius: 50%;border:5px solid black;margin-top: -320px;margin-left: -120px;" src="images/i2.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>

        </div> 
      </div>       
     </section>
   </div>

  <div data-aos="fade-right" data-aos-duration="2000">
     <section class="feature-area p-5 bg-light ">
    
      <div class="row justify-content-between animated fadeInUpBig" id = "animated-example">

            <div class="col-3 text-center rounded p-2 mx-3" style="border:1px solid ;background-color:#white; padding: 10px;box-shadow: 15px 10px 18px #ffa6b2;color: #ff5773;">
              <i class="fa fa-fire fa-3x mt-2 mb-2"  style="padding-top:-20px;"></i>
              <div class="feature-word">
                    <h5 class="text-dark font-weight-bold">Quickly Cook</h5>
                    <p class="text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    </p>
                  </div>
              
            </div>
    
   <div class="col-3 text-center rounded p-2 mx-3" style="border:1px solid ;background-color:#white; padding: 10px;box-shadow: 15px 10px 18px #ffa6b2;color: #ff5773;">
              <i class="fa fa-clock fa-3x mt-2 mb-2"  style="padding-top:-20px;"></i>
              <div class="feature-word">
                    <h5 class="text-dark font-weight-bold">Safe Time</h5>
                    <p class="text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    </p>
                  </div>
            
            </div>

          
         <div class="col-3 text-center rounded p-2 mx-3" style="border:1px solid ;background-color:#white; padding: 10px;box-shadow: 15px 10px 18px #ffa6b2;color: #ff5773;">
              <i class="fa fa-coffee fa-3x mt-2 mb-2"  style="padding-top:-20px;"></i>
              <div class="feature-word">
                    <h5 class="text-dark font-weight-bold">Relax & Fresh</h5>
                    <p class="text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    </p>
                  </div>
              
            </div>
            
  </section>
  </div>


  <div data-aos="fade-right" data-aos-duration="2000">
     <section class="trend-area ">
      <div class="row justify-content-center">
        <div class="col-8">
       <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="gallery carousel-item active" id="gallery">
      <img src="images/s1.jpg" class="d-block" style="width: 100%;height: 650px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-warning" style="margin-top: -300px;">Today Special</h2>
        <p class="text-dark">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>

     <div class="carousel-item">
      <img src="images/s1.jpg" class="d-block" style="width: 100%;height: 650px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="gallery text-warning" style="margin-top: -300px;"id="gallery">Today Special</h1>
        <p class="text-dark">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/s1.jpg" class="d-block" style="width: 100%;height: 650px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="gallery text-warning" style="margin-top: -300px;"id="gallery">Today Special</h1>
        <p class="text-dark">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
</div>
  </section>
 </div>  


    
  




   @yield('newsletter')


     </section>
  </div>
    
   <!-- <div data-aos="fade-right" data-aos-duration="2000" id="gallery">
    <section class="p-5 bg-light"> 

      <div class="gallery row justify-content-center text-warning mb-5">
        <h1>Gallery</h1><br>
      </div>
      <div class="row justify-content-between">

        <div class="col-4">
           <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="images/s1.jpg" class="d-block w-100" alt="...">
               </div>
              <div class="carousel-item">
                  <img src="images/s2.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                  <img src="images/s3.jpg" class="d-block w-100" alt="...">
             </div>
         </div>
      </div>
          <h2 class="mt-2 text-dark text-center">Breakfast</h2>
        </div>


        <div class="col-4">
           <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="images/s2.jpg" class="d-block w-100" alt="...">
               </div>
              <div class="carousel-item">
                  <img src="images/s3.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                  <img src="images/s6.jpg" class="d-block w-100" alt="...">
             </div>
         </div>
      </div>
        <h2 class="mt-2 text-dark text-center">Lunch</h2>
        </div>


        <div class="col-4">
           <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="images/s6.jpg" class="d-block w-100" alt="...">
               </div>
              <div class="carousel-item">
                  <img src="images/s1.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                  <img src="images/s2.jpg" class="d-block w-100" alt="...">
             </div>
         </div>
          </div>
            <h2 class="mt-2 text-dark text-center">Dinner</h2>
        </div>

      </div>
    </section>
  </div> -->
   

@include('mainlayout.footer')