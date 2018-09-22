<!DOCTYPE html>
<html lang="en">

  <head>


    <?php $this-> load ->view ('tick/partials/header'); ?>

     <title>TickValue</title>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php 
    $data['email']= array($this -> input -> get('username'));



  if ($this -> input -> get('username') == '')
   {
    $this-> load ->view ('tick/partials/nav_bar'); 
   }

   else
   {
    $this-> load ->view ('tick/partials/nav_bar2',$data); 
   }

     ?>
  
    <!-- Header -->


    <header class="head1 masthead bg-success text-white text-center">
      <div class="containmain">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url(); ?>img/logo.gif" alt="logo">
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Sri Lanka's first web based platform for land valuation</h2>
      </div>

      <div class="containdesc">
      	<br>
     
         <form action="<?php echo base_url()?>index.php/tick/home/register"  name="buttSec"><button type="submit" class="btn btn-primary btn-xl" id="Register">SignUp for free</button></form>
      </div>


    </header>

   
   <section class="features" id="featues">
   
        </div>
      </div>
    </section>

   

    <!-- Footer -->
    <?php $this-> load ->view ('tick/partials/footer'); ?>
  </body>

</html>