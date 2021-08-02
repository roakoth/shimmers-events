<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/lightbox.min.css" />
    <link rel="stylesheet" href="css/utilities.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Shimmers Event</title>
  </head>
<body>
  <style>

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}  


    .hero-wrap::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 40vh;
    background: rgba(0, 0, 0, 0.5);
  }

  .navbar a:hover {
  border-bottom:  #FF0000 2px solid;
  }

  .eventsPic {
      height: 250px; 
      width: 300px;
      margin-bottom: 12px;
      object-fit: contain;
  } 

  h5 {
      text-align: center;
      /* margin-bottom: 12px; */
      
  }

  .gallery-section {
      margin-bottom: 20px;
  }


  @media (max-width: 768px){

.hero-wrap::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 50vh;
  background: rgba(0, 0, 0, 0.5);
}

h1 {
  font-size: 40px !important;
}


.eventsPic {
  height: 200px !important;
  width: 250px !important;
  object-fit: contain;
}


}

@media (max-width: 320px){
  .hero-wrap::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 52vh;
  background: rgba(0, 0, 0, 0.5);
} 

.eventsPic {
  height: 200px;
  width: 200px !important;
  object-fit: contain;
}




}

@media (max-width: 1024px){
 
  .eventsPic {
  height: 300px;
  width: 250px;
  object-fit: contain;
}

}




  </style>
<?php 

include "cssjs/css.php";

include "includes/header.php";

?>
  

<div class="hero-wrap" style="background-image: url('images/decorations.jpeg'); height: 40vh;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-9 ftco-animate">
            <h1 class="mb-4" style="color: #fff; margin-top:8rem; font-size:60px;"><strong> Gallery <br></strong> </h1>
           
            <div>
            </div>     
          </div>
        </div>
      </div>
    </div>


    <section class="bg-light" id="events" style="padding: 4rem; margin-top: 2rem;">
      <div class="container" id="0">
    	  <div class="row mb-5 pb-3">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
          	   <div class="gallery">
                   <img class="eventsPic" src="images/Tabitha_pic.jpeg" alt="Card image cap"> 
                   <h5 class="">Tabitha Founder of Shimmers Event</h5>
               </div>
            </div>
           
            

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate" style="margin-bottom:2rem;">
          	   <div class="gallery">
                   <img class="eventsPic" src="images/venue_two.jpeg" alt="">
                   <h5 class="">Wedding ceremony</h5>  
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
          	   <div class="gallery">
                  <img class="eventsPic"  src="images/venue_three.jpeg" alt="">
                  <h5 class=""> Outdoor Event</h5>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate" style="margin-bottom:2rem;">
          	   <div class="gallery">
                   <img class="eventsPic" src="images/tabitha_client.jpeg" alt="">
                    <h5 class=""> Tabitha The Event Organizer</h5>
               </div>
            </div>


            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate mb-3">
          	   <div class="gallery">
                   <img class="eventsPic" src="images/venue_one.jpeg" alt="Card image cap">
                   <h5 class=""> Wedding ceremony</h5>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
          	   <div class="gallery">
                   <img class="eventsPic" class="" src="images/venue_four.jpeg" alt="Card image cap"> 
                   <h5 class="">Evening party</h5>
               </div>
            </div>

           
            

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
          	   <div class="gallery">
                  <img class="eventsPic" src="images/family_bank.jpeg" alt="Card image cap"> 
                   <h5 class="">Family Bank Marathon Event</h5>  
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
              <div class="gallery">
                 <img class="eventsPic" src="images/pexels.jpeg" alt="Card image cap"> 
                 <h5 class=""> Wedding Event</h5>  
              </div>

            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
              <div class="gallery">
                  <img class="eventsPic" src="images/nice_arrangement.jpeg" alt="Card image cap"> 
                  <h5 class=""> Event</h5>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
               <div class="gallery">
                 <img class="eventsPic" src="images/hero.jpeg" alt="Card image cap"> 
                  <h5 class="">Event</h5>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
              <div class="gallery">
                  <img class="eventsPic" src="images/corporate.jpeg" alt="Card image cap"> 
                  <h5 class="">Corporate Events</h5>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
               <div class="gallery">
                  <img class="eventsPic" src="images/catering.jpeg" alt="Card image cap"> 
                  <h5 class="">Catering services</h5>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
          	   <div class="gallery">
                  <img class="eventsPic" src="images/cutlery.jpeg" alt="Card image cap"> 
                  <h5 class="">Event</h5>
                </div>
            </div>
            
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
               <div class="gallery">
                  <img class="eventsPic" src="images/baby_shower_2.jpeg" alt="Card image cap"> 
                  <h5 class="">Baby shower Event</h5>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
              <div class="gallery">
               <img class="eventsPic" src="images/arrange.jpeg" alt="Card image cap"> 
                <h5 class=""> Event</h5>
              </div>
            </div>

            
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
              <div class="gallery">
               <img class="eventsPic" src="images/nice_decor.jpeg" alt="Card image cap"> 
               <h5 class=""> Decorations</h5>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">  
              <div class="gallery"> 
               <img class="eventsPic" src="images/tent_3.jpg" alt="Card image cap"> 
               <h5 class=""> Tent services</h5>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 gallery-section ftco-animate">
          	   <div class="gallery">
                  <img class="eventsPic" src="images/wedding_car.jpeg" alt="Card image cap"> 
                  <h5 class="">Wedding car</h5>  
               </div>
            </div>

        </div>  
    		
    	</div>
    </section>

 
<?php
include "includes/footer.php";
?>
  
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php
  include "./cssjs/js.php";
  ?>
  </body>  
</html>