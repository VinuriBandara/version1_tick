<!DOCTYPE html>
<html lang="en">

  <head>

   <?php $this-> load ->view ('tick/partials/header'); ?>

    <title>Why TickValue?</title>


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

  <!-- Header -->
    <header class="head2 masthead text-white text-center">
      <div class="containmain">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url(); ?>img/logo.gif" alt="logo">
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Sri Lanka's first web based platform for land valuation</h2>
      </div>

      <div class="containdesc">
        <br>
     
         <form action="Register.html" name="buttSec"><button type="submit" class="btn btn-primary btn-xl" id="Register">SignUp for free</button></form>
      </div>


    </header>
  

  
   <section class="whyTick" id="whyTick">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Why TickValue?</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4">
             <img class="img-fluid" src="<?php echo base_url(); ?>img/headache.png" alt="">
          </div>
          <div class="col-sm-6 col-md-6 col-lg-8" id="why">
            <p class="why">
            	<br>
            	You will sure be relieved when we say that Tick Value will give you a break when it comes to spending hours and hours waiting for the valuer or hours that you spend at the land thinking how are you gonna value this land, what would the market value for this land and most importantly would i be able to sell this land?
            </p>
            <form action="Register.html" name="buttSec"><button type="submit" class="btn btn-primary btn-xl" id="Register" >SignUp for free</button></form>
          </div>

          <br><br>
          <div class="col-sm-6 col-md-6 col-lg-8" id="why">
            <p class="why">
            	<br><br><br>
            	All we need is youe valuation report and the document of ownership we will tell you all you need to know abut your land, and within few hours you will receive the valuation report.
            </p>
           
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
           
              <img class="img-fluid" src="<?php echo base_url(); ?>img/report.png" alt="">
          
          </div>

          <br><br>
           <div class="col-sm-6 col-md-6 col-lg-4">
           
             <img class="img-fluid" src="<?php echo base_url(); ?>img/phone.jpg" alt="">
          
          </div>
          <div class="col-sm-6 col-md-6 col-lg-8" id="why">
            <p class="why">
              <br><br><br>
              Have you had enough of calling your valuer, and not have hime picking up? Make an appointment in a minute and the valuer will reply to you within few minutes.
            </p>
            <form action="<?php echo base_url()?>index.php/tick/home/profile"" name="buttSec"><button type="submit" class="btn btn-primary btn-xl" id="appoint">Make an appointment</button></form>
          </div>



          <div class="col-sm-4 col-md-4 col-lg-4" id="steps">
              <h3>Register yourself</h3>    
              <img class="img-fluid" src="<?php echo base_url(); ?>img/reg.jpg" alt="">   
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4" id="steps">
            <h3>Make an appointment </h3> 
            <img class="img-fluid" src="<?php echo base_url(); ?>img/appoint.png" alt="">   
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4" id="steps">
            <h3>Receive a 100% accurate valuation report in a day</h3>
            <img class="img-fluid" src="<?php echo base_url(); ?>img/email.png" alt="">   
          </div>
       


      
        </div>
      </div>
    </section> 

   

     <!-- Footer -->
   <?php $this-> load ->view ('tick/partials/footer'); ?>

  </body>

</html>
