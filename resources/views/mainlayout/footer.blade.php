
    <footer class="footer-area p-5 " style="background-color: #523338">
      <div class="container" >
        
       <div class="row justify-content-between text-warning mt-5">

         <div class="col-3">
           <h4>About Us</h4>
           <div class="text-white">
             <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, 
             consectetur adipisicing elit, sed do eiusmod tempor 
             incididunt ut labore et dolore magna ali</p>
            <a class="text-warning mr-4" style="text-decoration: none;" href=""><i class="flaticon-facebook"></i></a>
            <a class="text-warning mr-4" style="text-decoration: none;" href=""><i class="flaticon-instagram"></i></a>
            <a class="text-warning mr-4" style="text-decoration: none;" href=""><i class="flaticon-gmail"></i></a>

            
           </div>
         </div>

         <div class="col-3">
           <h4 class="text-warning">Contact Us</h4>
            <div class="mt-3 ">
            <a href=""  style="text-decoration: none;color: white;font-size: 18px;"><i class="fa fa-phone mr-3 text-warning"></i>099999999</a><br><br>
             <a href=""  style="text-decoration: none;color: white;font-size: 18px;"><i class="fa fa-map-marker mr-3 text-warning"></i>523 Thingan Kyun, 5th Floor </a><br><br>
              <a href=""  style="text-decoration: none;color: white;font-size: 18px;"><i class="fa fa-envelope mr-3 text-warning"></i>099999999</a><br>
            
            </div>
         </div>

         <div class="col-3">
           <h4>New Menu</h4>
           <div class="text-white">
             <a class="text-white" href="" style="text-decoration: none;">
              <img class="mr-3 mb-3" src="images/bur.jpg" style="border-radius: 50%;width: 50px;height: 50px;" alt="">Italian Bomba Sandwich</a><br>
            <a class="text-white" href="" style="text-decoration: none;">
              <img class="mr-3 mb-3" src="images/bur.jpg" style="border-radius: 50%;width: 50px;height: 50px;" alt="">Italian Bomba Sandwich</a><br>
            <a class="text-white" href="" style="text-decoration: none;">
              <img class="mr-3 mb-3" src="images/bur.jpg" style="border-radius: 50%;width: 50px;height: 50px;" alt="">Italian Bomba Sandwich</a><br>
            <a class="text-white" href="" style="text-decoration: none;">
              <img class="mr-3 mb-3" src="images/bur.jpg" style="border-radius: 50%;width: 50px;height: 50px;" alt="">Italian Bomba Sandwich</a><br>
           </div>
         </div>

         <div class="col-3">
            <h4>Top Rated</h4>
              <div class="top-rated-food text-white">

              <div class="each-food">
                 <a class="text-white" href="" style="text-decoration: none;">
              <img class="mr-3 mb-3" src="images/bur.jpg" style="border-radius: 50%;width: 50px;height: 50px;" alt="">Italian Bomba Sandwich</a><br>
              <p>
                <i class="flaticon-alarm-clock text-warning "> 2 hrs</i>
                <i class="flaticon-heart text-warning mr-2"> 1121</i>
              </p>
              </div>

              <div class="each-food">
                 <a class="text-white" href="" style="text-decoration: none;">
              <img class="mr-3 mb-3" src="images/bur.jpg" style="border-radius: 50%;width: 50px;height: 50px;" alt="">Italian Bomba Sandwich</a><br>
              <p>
                <i class="flaticon-alarm-clock text-warning "> 2 hrs</i>
                <i class="flaticon-heart text-warning mr-2"> 1121</i>
              </p>
              </div>


            
           </div>
      </div>
       
      </div>
      
    </footer>

  
</body>

</html>





<script src="resources/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="fontawesome-free-5.13.1-web/fontawesome-free-5.13.1-web/js/brands.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


<script>
  var ml4 = {};
ml4.opacityIn = [0,1];
ml4.scaleIn = [0.2, 1];
ml4.scaleOut = 3;
ml4.durationIn = 800;
ml4.durationOut = 600;
ml4.delay = 500;

anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letters-1',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-1',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-2',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-2',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-3',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-3',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4',
    opacity: 0,
    duration: 500,
    delay: 500
  });
</script>


<script>
  var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml11 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700
  })
  .add({
    targets: '.ml11 .line',
    translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
    easing: "easeOutExpo",
    duration: 700,
    delay: 100
  }).add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 34 * (i+1)
  }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>




<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>