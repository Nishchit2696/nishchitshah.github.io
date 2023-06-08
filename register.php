<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
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
  </style>
  <div class="hero-wrap js-fullheight" style="background-image: url('images/wall.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
      <div class="col-md-8" id="signup_msg">
         <!--Alert from signup form-->
       </div>
        <div class="row block-9">
          <div class="col-md-9 pr-md-6">
            <form id="signup_form" onsubmit="return false" class="was-validated">
              <div class="form-group" >
                <input type="text" name="full_name" class="form-control field-border" placeholder="Your Name"  required>
              </div>
              <?php
                if ($_GET['event_id'] != ''){
                  $event_id = $_GET['event_id'];
                  echo '<input type="hidden" name="event_id" value='.$event_id.' class="form-control field-border"   required>';
                }
              ?>
              
              <div class="form-group">
                <input type="email" name="email" class="form-control field-border" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" name="mobile" placeholder="mobile" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" name="college" placeholder="college" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control field-border" name="branch" placeholder="branch" required>
              </div>
              
              <div class="form-group">
                <input  value="Register" type="submit" name="signup_button" class="btn btn-primary py-3 px-5 " required>
              </div>
            </form>
          
          </div>

          
        </div>
      </div>
    </section>
        </div>
      </div>
    </div>







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
</html>