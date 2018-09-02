<!DOCTYPE html>
<html lang="en">

  <head>


  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

   


    <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  
    <link href="<?php echo base_url(); ?>css/tick.css" rel="stylesheet">

        <title>Home Valuer</title>

  </head>

  <body id="valuer-home">

    <!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top text-uppercase" id="mainNav_val">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Tick Value</a>
     
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Schedule</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="about.html">Appointment</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Help">Valuations</a>
            </li>
              &nbsp;&nbsp;  &nbsp;&nbsp;
            <li class="nav-item mx-0 mx-lg-1" >
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.html" id="log">Log Out</a>
            </li>
          </ul>
        </div>
      </div> 
    </nav>   

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
   </body>
   </html>