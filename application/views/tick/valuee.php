<!DOCTYPE html>
<html lang="en">

  <head>

    <?php $this-> load ->view ('tick/partials/header'); ?>

   <title>Home Valuer</title>

  </head>

  <body id="valuer-home">


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
<!--     <header class="head4 masthead text-white text-center">
      <div id="seeAppointments" class="col-sm-4 col-md-4 col-lg-4">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/" alt="logo">
        <hr class="star-light"> -->

<!--       </div> -->

   <!--    <div id="seeSchedule" class="col-sm-4 col-md-4 col-lg-4">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/" alt="logo">
        <hr class="star-light"> -->
     
         <div class="card-group">
            <div class="card bg-primary">
              <div class="card-body text-center">
                <p class="card-text"><a id="valuer_link" href="<?php echo base_url();?>index.php/tick/home/appointments">All Appointments</a></p>
              </div>
            </div>
            <div class="card bg-warning">
              <div class="card-body text-center">
                <p class="card-text"><a id="valuer_link" href="<?php echo base_url();?>index.php/tick/home/valuer_accept">Schedule</a></p>
              </div>
            </div>
            <div class="card bg-success">
              <div class="card-body text-center">
                <p class="card-text">Ongoing Projects</p>
              </div>
            </div>
            <div class="card bg-danger">
              <div class="card-body text-center">
                <p class="card-text">Completed Projects</p>
              </div>
            </div>
          </div>
<!--       </div> 

    </header> -->


    <?php $this-> load ->view ('tick/partials/footer'); ?>
   </body>
   </html>