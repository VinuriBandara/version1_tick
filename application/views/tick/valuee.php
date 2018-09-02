<!DOCTYPE html>
<html lang="en">

  <head>

    <?php $this-> load ->view ('tick/partials/header'); ?>

   <title>Home Valuer</title>

  </head>

  <body id="valuer-home">

    <!-- Navigation -->
  <?php $this-> load ->view ('tick/partials/nav_bar'); ?>

  <!-- Header -->


    <!-- Header -->
    <header class="head4 masthead text-white text-center">
      <div id="seeAppointments" class="col-sm-4 col-md-4 col-lg-4">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/" alt="logo">
        <hr class="star-light">
        <form method="post" action="<?php echo base_url();?>index.php/tick/home/valuer_accept">
           <input type="submit" id="formButton1" name="accept" value="Appointment" >
         </form>
      </div>

      <div id="seeSchedule" class="col-sm-4 col-md-4 col-lg-4">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/" alt="logo">
        <hr class="star-light">
          <form method="post" action="<?php echo base_url();?>index.php/tick/home/appointments">
           <input type="submit" id="formButton1" name="accept" value="All appointments" >
         </form>
      </div>

      <div id="seeValuations" class="col-sm-4 col-md-4 col-lg-4">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/" alt="logo">
        <hr class="star-light">
            <a href="#contain"><button type="button" id="formButton2">Valuations</button></a>
      </div>

    


    </header>


    <?php $this-> load ->view ('tick/partials/footer'); ?>
   </body>
   </html>