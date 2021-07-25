<?php
// session_start();
// $ip_add = getenv("REMOTE_ADDR");
// include "db/connect.php";
?>
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

  @media (max-width: 768px){

.hero-wrap::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100vw;
  height: 50vh;
  background: rgba(0, 0, 0, 0.5);
}

h1 {
  font-size: 40px !important;
}

.card-title {
  font-size: 18px;
}

h2 {
  font-size: 20px;
}

}

@media (max-width: 280px){
.hero-wrap::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 55vh;
  background: rgba(0, 0, 0, 0.5);
}

h1 {
  font-size: 40px !important;
}


.card {
  width: 170px;
 
}
.card-title {
  font-size: 18px;
}

h2 {
  font-size: 20px;
}


}


  </style>
<?php 

include "cssjs/css.php";

include "includes/header.php";
?>

<html>
<body>
<!-- style="background-image: url('images/hero.jpeg'); height:40vh;" -->

<div class="hero-wrap"  style="background-image: url('images/hero.jpeg'); height:40vh;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-9 ftco-animate">
            <h1 class="mb-4" style="color: #fff; margin-top:8rem; font-size:60px;"><strong> Events <br></strong> </h1>
           
            <div>
            </div>     
          </div>
        </div>
      </div>
    </div>


    <section class="bg-light" class="events" id="events" style="padding: 4rem; margin-top: 2rem;">
    	<div class="container" id="0">
    		<div class="row mb-5 pb-3">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 heading-section ftco-animate" style="margin-bottom:1rem;">
          	   <div class="card">
                    <img class="card-img-top" src="images/pexels.jpeg" alt="Card image cap">
                   <div class="card-body">
                   <h3 class="card-title">Wedding Events</h3>
                   <p class="card-text">From small intimate gatherings to large and lavish affairs, we offer world class events for the new couples to enjoy their big day. </p>
                   </div>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 heading-section ftco-animate" style="margin-bottom:1rem;">
          	   <div class="card">
               <img class="card-img-top" src="images/cutlery.jpeg" alt="Card image cap">
                   <div class="card-body">
                   <h3 class="card-title">Funeral Events</h3>
                   <p class="card-text"> We offer world class events to enable your family give the best send off to our loved ones. </p>
                   </div>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 heading-section ftco-animate" style="margin-bottom:1rem;">
          	   <div class="card">
               <img class="card-img-top" src="images/baby_shower.jpeg" alt="Card image cap">
                   <div class="card-body">
                   <h3 class="card-title">Baby shower Events</h3>
                   <p class="card-text"> We give you the best lavish event as you plan to welcome your baby to this world!</p>
                   </div>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 heading-section ftco-animate" style="margin-bottom:1rem;">
          	   <div class="card">
               <img class="card-img-top" src="images/hero.jpeg" alt="Card image cap">
                   <div class="card-body">
                   <h3 class="card-title">Birthday Events</h3>
                   <p class="card-text"> All event sizes are catered for! Large scale to small scale bashes, making all of them glamorous.</p>
                   </div>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 heading-section ftco-animate" style="margin-bottom:1rem;">
          	   <div class="card">
               <img class="card-img-top" src="images/corporate.jpeg" alt="Card image cap"> 
                   <div class="card-body">
                   <h3 class="card-title">Corporate Events</h3>
                   <p class="card-text"> We help you take your professionalism to the next level by planning your events with executive style.</p>
                   </div>
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