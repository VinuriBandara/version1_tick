
<!DOCTYPE html>
<html lang="en">

  <head>



  <?php $this-> load ->view ('tick/partials/header'); ?>

   <title>Register</title>

  </head>

  <body id="page-top">


    <?php foreach ($email as $username):

  if ($username == '')
   {
    $this-> load ->view ('tick/partials/nav_bar'); 
   }

   else
   {
    $this-> load ->view ('tick/partials/nav_bar2',$username); 
   }

     endforeach; ?>


   <header class="masthead bg-success text-white text-center">
      <div class="containmain">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url(); ?>img/logo.gif" alt="logo">
        
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Sri Lanka's first web based platform for land valuation</h2>
      </div>

      <div class="containdesc">
        <br>
     
        
      </div>


    </header> 
 


 <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Register for free</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
           
            <form name="sentMessage" id="contactForm" method="post">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>First Name</label>
                  <input class="form-control" id="name" type="text" placeholder="First Name" name="first_name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Last Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Last Name" name="last_name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" name="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>


               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

     
              <br>

               <div class="control-group">

                
                  <h4><span class="label label-default">Property to be valuated</span></h4>
           
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address Line 1</label>
                  <input class="form-control" id="email" name="address1" type="text" placeholder="Address Line 1" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address Line 2</label>
                  <input class="form-control" id="email" name="address2" type="text" placeholder="Address Line 2" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address Line 3</label>
                  <input class="form-control" id="email" type="text" name="address3" placeholder="Address Line 3" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>


               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Date expected</label>
                  <input class="form-control" id="email" name="date" type="date" required="required" data-validation-required-message="Select a date">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

     

         
              
         
              
              
              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" name="register" value="Sign Up">
                <input type="reset" class="btn btn-primary btn-xl" id="sendMessageButton" value="Reset">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  

  <?php $this-> load ->view ('tick/partials/footer'); ?>






</body>
</html>