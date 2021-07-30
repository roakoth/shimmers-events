
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

 .aboutPic {
    height: 60vh;
    width: 40vw;
    border-radius: 50%;
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
  img {
    height: 40vh;
    width: 45vw;
    
    
  }
}

@media (max-width: 268px){
  .hero-wrap::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 70vh;
    background: rgba(0, 0, 0, 0.5);
  }

}

  </style>

<?php 

include "cssjs/css.php";

include "includes/header.php";
?>
 <!-- END nav -->
 <div class="hero-wrap" style="background-image: url('images/nice_decor.jpeg'); height: 40vh;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-9 ftco-animate">
            <h1 class="mb-4" style="color: #fff; margin-top:8rem; font-size:60px;"><strong> Who We Are <br></strong> </h1>
           
            <div> 
            </div>      
          </div>
        </div>
      </div>
    </div>
  
    <section class="bg-light" id="events" style="padding: 4rem; margin-top: 2rem;">
    	<div class="container" id="0">
    		<div class="row mb-5 pb-3">
            <div class="col-md-6 col-sm-12 heading-section ftco-animate">
            <!-- <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
		        </span> -->
             <p>  <i class="icon-quote-left"></i> Shimmers Event Organizers is an Events company based in Eldoret town. It started back in 2014 when I was working as an intern in some NGO within. </p>
                <!-- <br /> -->
                <p> We had many outdoor activities which needed services with tent, sound and truck for roadshows. I saw there was a gap with the service providers we dealt with in terms of communication, customer care and we never got a one shop stop.  </p>
                <!-- <br /> -->
                <p>We had to deal with several supplier's which provided a hustle. After my contract I registered a business name got several jobs as I rented the rentals. At that point I don't have capital to buy my own assets. </p>
                <!-- <br /> -->
                <p> I have organized Family Bank Marathon for 3 years. I have done end year partiesand customer week for several banks in Eldoret town.</p>
                <!-- <br /> -->
                <p>On social events, we have majored in dowry payment events(Koitos), weddings, birthday, bridal parties and funerals. We provide party rentals i.e. tents, seats, tables and mobile toilets. </p>
                <!-- <br /> -->
                <p>We also partner with other credible companies to offer a one stop shop for all services needed in an events that includes Sound system, catering services, makke-up artists, photographers and MC. </p>
                <!-- <br /> -->
                <p>We majorly depend on referrals as we believe in delivering personalized services and customizing on clients needs. Previously I could post but these does not sell as opposed to the referrals where one has experienced our services. <i class="icon-quote-right"></i> </p>
                <!-- <p>We are classified as "ONE STOP SOLUTION".  </p>
                <ul>
                <li> Hiring out tents </li>
                <li> Setting up mobile toilets</li>
                <li> Outside catering</li>
                <li> Product launches</li>
                <li> Entertainment </li>
                <li> Meetings, Incentives, Conventions and Exhibitions</li>
              
               </ul> -->
            </div>

            <div id="pic" class="col-md-6 col-sm-12 heading-section ftco-animate"> 
            <img class="aboutPic" src="images/nice_arrangement.jpeg"> 
            
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