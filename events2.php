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

  <style>
/* .hero-wrap {
  background-image: url('images/hero.jpeg'); 
  height:60vh;
} */


    .hero-wrap::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 40vh;
    background: rgba(0, 0, 0, 0.5);
  }

  @media (min-width:280px) and (max-device-width : 800px)  {
  
  /* smartphones, iPhone, portrait 480x320 phones */
 

  .hero-wrap::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 55%;
    background: rgba(0, 0, 0, 0.5);
  }


  body {
    width: 100%;
  }

  .heading-section {
    margin-bottom: 25px;
  }

   }


   @media (min-width:280px) and (max-device-width : 653px)  {
  
  /* smartphones, iPhone, portrait 280x320 phones */
 .card-title {
   font-size: 16px;
 }

  h2, h3 {
  font-size: 16px !important;
  font-weight: 600 !important;
 }
   }
 

 

  </style>
<?php 

include "cssjs/css.php";

include "includes/header.php";
   

include "events.php";

include "includes/footer.php";
?>
  
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php
  include "./cssjs/js.php";
  ?>
  </body>  
</html>