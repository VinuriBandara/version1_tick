
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



        <title>Register</title>

  </head>

  <body id="page-top">
<nav class="navbar navbar-expand-lg fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Tick Value</a>
     
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="whyTick.html">Why TickValue?</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="about.html">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Contact</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="appoint.html">Appointment</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Help">Help</a>
            </li>
              &nbsp;&nbsp;  &nbsp;&nbsp;
            <li class="nav-item mx-0 mx-lg-1" >
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.html" id="log">Login</a>
            </li>
          
            <li class="nav-item mx-0 mx-lg-1" >
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#value" id="valuer">Valuer</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


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
  






</body>
</html>