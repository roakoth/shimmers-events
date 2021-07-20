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

  img {
      height: 300px;
      width: 300px;
      margin-bottom: 12px;
  } 

  h5 {
      text-align: center;
      margin-bottom: 12px;
      
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

img {
  height: 300px !important;
  width: 250px !important;
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

img {
  height: 300px;
  width: 200px !important;
}


}

@media (max-width: 1024px){
 
  img {
  height: 300px;
  width: 250px;
}

}




  </style>
<?php 

include "cssjs/css.php";

include "includes/header.php";
   

 include "gallery.php";

include "includes/footer.php";
?>
  
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php
  include "./cssjs/js.php";
  ?>
  </body>  
</html>