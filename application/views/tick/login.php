<!DOCTYPE html>
<html lang="en">

  <head>


    <?php $this-> load ->view ('tick/partials/header'); ?>
     <title>Login</title>
  </head>

  <body id="page-top">

    <!-- Navigation -->
<?php $this-> load ->view ('tick/partials/nav_bar'); ?>




<section id="contact">
      <div class="containerLog">
        <h2 class="text-center text-uppercase text-secondary mb-0" id="contacthead">Login</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">

             <form name="sentMessage" id="loginForm" method="post">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" name="email" type="text" placeholder="Email address" required="required" data-validation-required-message="Please enter a vallid email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Password</label>
                  <input class="form-control" name="password" type="Password" placeholder="Password" required="required" data-validation-required-message="Please enter ypur password.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
             
              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" name="log" value="Login">
              </div>
            </form>
          </div>
        </div>
      </div>

            <?php
        if($this->session->flashdata('error')){
          ?>
          <div class="alert alert-danger text-center" style="margin-top:500px;">
            <?php echo $this->session->flashdata('error'); ?>
          </div>
          <?php
        }
      ?>
    </section>



     <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 

  <!--  
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

   
     <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
 -->
    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>js/freelancer.js"></script> 


  </body>
  </html>