<?php
// session_start();
// $ip_add = getenv("REMOTE_ADDR");
// include "db/connect.php";
?>
<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
<?php 
include "cssjs/css.php";
?>
<body>
    
  <?php
  include "includes/header.php";
  ?>
  <style>
  .field-border{
    border-radius:20px;
    
  }

  .navbar a:hover {
  border-bottom:  #FF0000 2px solid;
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

  img {
    width: 400px;
    height: 500px;
  }

  h3, p {
    text-align: center;
  }

  .btn {
  margin-top: 20px;
  cursor: pointer;
  display: inline-block;
  padding-right:20px;
  padding-left: 20px;
  /* padding: 10px 30px; */
  color: #fff;
  background-color: #f85959;
  border: none;
  border-radius: 30px;
}

.btn:hover {
  opacity: 0.9;
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
  height: 500px;
  width: 310px;
}

h1 {
  font-size: 40px !important;
}

.form {
  width: 400px;
  /* margin-left:10px; */
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

img {
  height: 500px;
  width: 280px;
}


}


  </style>


<div class="hero-wrap" style="background-image: url('images/hero.jpeg'); height: 40vh;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-9 ftco-animate">
            <h1 class="mb-4" style="color: #fff; margin-top:8rem; font-size:60px;"><strong> Register <br></strong> </h1>
           
            <div>
            </div>     
          </div>
        </div>
      </div>
    </div>


<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
      <div class="col-md-8" id="signup_msg">
         <!--Alert from signup form-->
       </div> 
        <div class="row block-9">

        <div class="col-md-6 col-sm-12 event">
              <h3> Do you need to plan an event?</h3>
              <p> We look forward to hearing from you</p>
               <img src="images/begin_chat.svg"> 
          </div>


          <div class="col-md-6 pr-md-5 col-sm-12 form">
            <!-- <form id="signup_form" class="was-validated" action="https://formsubmit.co/roseakoth2015@gmail.com" method="POST">
              <div class="form-group" >
                <input type="text" name="full_name" class="form-control field-border" placeholder="Your Name"  required>
              </div> -->
<!--               
                // if ($_GET['event_id'] != ''){
                //   $event_id = $_GET['event_id']; -->
                <!-- //   echo '<input type="hidden" name="event_id" value='.$event_id.' class="form-control field-border"   required>'; -->
                <!-- // } -->
            
              
              <!-- <div class="form-group">
                <input type="email" name="email" class="form-control field-border" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" name="mobile" placeholder="mobile" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" name="type_event" placeholder="Type of event" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" name="location" placeholder="Location" required>
              </div>
              <div class="form-group">
                <textarea type="text" id="message" placeholder="Message" rows="7" class="form-control field-border" name="message" placeholder="Location" required></textarea>
              </div> -->



              <!-- <div class="field">
                <div data-netlify-recaptcha="true"> </div>
              </div> -->
              
              <!-- <div class="form-group">
                <input type="submit" name="signup_button" class="btn btn-primary py-3 px-5 " required>
              </div>
            </form> -->
            
            <!-- value="Register" -->

            <form action="https://formsubmit.co/shimmerseventsorg@gmail.com" method="POST">
                <input type="text" name="name" class="form-control field-border" placeholder="Name" style="margin-bottom: 20px;"  required>
                <input type="email" name="email" class="form-control field-border" placeholder="Email" style="margin-bottom: 20px;" required>
                <input type="text"  name="mobile" placeholder="mobile" class="form-control field-border" style="margin-bottom: 20px;" required>
                <input type="text" name="location" placeholder="Location" class="form-control field-border" style="margin-bottom: 20px;" required>
                <textarea type="text" id="message" placeholder="Message" rows="7" name="message" placeholder="Location" class="form-control field-border" style="margin-bottom: 20px;" required></textarea>

                <button type="submit" class="btn" style="padding: 10px 30px; border-radius: 5px; border:none;">Send</button>
            </form>

          </div>


          
          <!-- <div class="col-md-6" id="map"></div> -->
        </div>
      </div>
    </section>





<?php
include "includes/footer.php";
?>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <?php
  include "cssjs/js.php";

  ?>
  <script>
 
  </script>
  </body> 