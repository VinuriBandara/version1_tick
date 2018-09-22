
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

    <header class="head3 masthead text-white text-center">
      <div class="containmain1">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url()?>img/manicon.gif" alt="logo">
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Client</h2>
           <a href="#contain"><button type="button" id="formButton">Register</button> </a>
      </div>

      <div class="containmain2">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url()?>img/manicon.gif" alt="logo">
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Valuer</h2>
            <a href="#contain"><button type="button" id="formButton2">Register</button></a>
      </div>
    </header> 
  



 <section id="contact">
      <div class="container">
 
        <div class="row">
          <div class="col-lg-8 mx-auto">
           
            <form name="sentMessage" id="contactForm_client" method="post">
              <h2 class="text-center text-uppercase text-secondary mb-0">Register for free</h2>
              <hr class="star-dark mb-5">

      
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
                  <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." >
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
                <input type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" name="register_client" value="Sign Up">
                <input type="reset" class="btn btn-primary btn-xl" id="sendMessageButton" value="Reset">
                <input type="button" class="btn btn-primary btn-xl" id="cancel1" value="Close" >
              </div>
            </form>





            <form name="sentMessage" id="contactForm_valuer" method="post">
              <h2 class="text-center text-uppercase text-secondary mb-0">Register for free valuer</h2>
              <hr class="star-dark mb-5">
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
                  <label>Valuer Reference Number</label>
                  <input class="form-control" id="phone" name="ref_no" type="text" placeholder="Valuer Reference Number" required="required" data-validation-required-message="Please enter your phone number.">
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

                
                  <h4><span class="label label-default">Office address</span></h4>
           
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

    
              
              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-xl" id="sendMessageButton" name="register_valuer" value="Sign Up">
                <input type="reset" class="btn btn-primary btn-xl" id="sendMessageButton" value="Reset">
                <input type="button" class="btn btn-primary btn-xl" id="cancel2" value="Close" >
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  

  <?php $this-> load ->view ('tick/partials/footer'); ?>

<script>
$(document).ready(function(){
    $("#formButton").click(function(){
        $("#contactForm_valuer").hide();
        $("#contactForm_client").show();
        
    });

     $("#cancel1").click(function(){
        $("#contactForm_client").hide();
        
        
    });


        $("#cancel2").click(function(){
        $("#contactForm_valuer").hide();
        
        
    });





     $("#formButton2").click(function(){
         $("#contactForm_client").hide();
        $("#contactForm_valuer").show();

    });
});


</script>




</body>
</html>