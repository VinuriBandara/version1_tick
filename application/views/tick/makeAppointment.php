<!DOCTYPE html>
<html lang="en">

  <head>

  
    <title>TickValue</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

   


    <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  
    <link href="<?php echo base_url(); ?>css/tick.css" rel="stylesheet">



  </head>

  <body id="page-top">

    <!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Tick Value</a>
     
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Why TickValue?</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="about.html">Contact</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Request">Appointment</a>
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

  <!-- Header -->


    <!-- Header -->
    <header class="head3 masthead text-white text-center">
      <div class="containmain1">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url()?>img/manicon.gif" alt="logo">
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Financial company</h2>
           <a href="#contain"><button type="button" id="formButton">Make Appointment</button> </a>
      </div>

      <div class="containmain2">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url()?>img/manicon.gif" alt="logo">
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Other</h2>
            <a href="#contain"><button type="button" id="formButton2">Make Appointment</button></a>
      </div>

    


    </header>
   

<div id="contain">


<form id="form1" method="post">
  <hr class="star-light mb-5">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email</label>
                  <input class="form-control" id="email" name="email" type="text" placeholder="Email address" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <select class="form-control" id="prefix" name="prefix">
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Hon.">Hon.</option>
                    <option value="Dr.">Dr.</option>
                  </select>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>First Name</label>
                    <input class="form-control" id="name" type="text" name="fname" placeholder="First Name" required="required" >
                    <p class="help-block text-danger"></p>
                  </div>
              </div>

              <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Last Name</label>
                    <input class="form-control" id="name" type="text" name="lname" placeholder="Last Name" required="required" >
                    <p class="help-block text-danger"></p>
                  </div>
              </div>
             
             


              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Position</label>
                  <input class="form-control" id="position" type="text" name="position" placeholder="Position within the comapny" required="required" ">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name of the company</label>
                  <input class="form-control" id="company" type="text" name="company" placeholder="Name of the company" required="required" ">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Branch</label>
                  <input class="form-control" id="branch" type="text" name="branch" placeholder="Branch (Optional)"  >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="text" placeholder="Phone Number" name="phone" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Purpose of the valuation (Description)</label>
                  <textarea class="form-control" id="purpose" type="text" placeholder="Purpose of the valuation" name="purpose" required="required" ></textarea> 
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name of the property (optional)</label>
                  <input class="form-control" id="name_property" type="text" placeholder="Name of the property (optional)" name="property_name" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address line 1</label>
                  <input class="form-control" id="address1" type="text" placeholder="Address line 1" name="address1" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address line 2</label>
                  <input class="form-control" id="address2" type="text" placeholder="Address line 2" name="address2" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>


              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address line 3</label>
                  <input class="form-control" id="address3" type="text" placeholder="Address line 3" name="address3" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              
              
              
              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-xl" id="appoint" name="finance_appointment" value="Make Appointment">
                <input type="reset" class="btn btn-primary btn-xl" value="Clear">
                <button type="button" class="btn btn-primary btn-xl" id="cancel1" >Close</button>
              </div>
 
</form>


<form id="form2" method="post">
  <hr class="star-light mb-5">
  <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email</label>
                  <input class="form-control" id="email" name="email" type="text" placeholder="Email address" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>


                 <div class="control-group">
                <select class="form-control" id="prefix" name="prefix">
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Hon.">Hon.</option>
                    <option value="Dr.">Dr.</option>
                  </select>
                </div>
              
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>First Name</label>
                    <input class="form-control" id="name" name="fname" type="text" placeholder="First Name" required="required" >
                    <p class="help-block text-danger"></p>
                  </div>
              </div>
             
             <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Last Name</label>
                    <input class="form-control" id="name" name="lname" type="text" placeholder="Last Name" required="required" >
                    <p class="help-block text-danger"></p>
                  </div>
              </div>
             

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" name="phone" type="text" placeholder="Phone Number" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Purpose of the valuation (Description)</label>
                  <textarea class="form-control" id="purpose" type="text" placeholder="Purpose of the valuation" name="purpose" required="required" ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name of the property (optional)</label>
                  <input class="form-control" id="name_property" name="property_name" type="text" placeholder="Name of the property (optional)" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address line 1</label>
                  <input class="form-control" id="address1" name="address1" type="text" placeholder="Address line 1" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address line 2</label>
                  <input class="form-control" name="address2" type="text" placeholder="Address line 2" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>


              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address line 3</label>
                  <input class="form-control" name="address3" type="text" placeholder="Address line 3" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              
              
              
              <br>
              <div id="success"></div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-xl" id="appoint" name="other_appointment">
                <input type="reset" class="btn btn-primary btn-xl" id="">
                <input type="button" class="btn btn-primary btn-xl" id="cancel2" >Close</button>
              </div>
 
</form>
</div>

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

<script>
$(document).ready(function(){
    $("#formButton").click(function(){
        $("#form2").hide();
        $("#form1").show();
        
    });

     $("#cancel1").click(function(){
        $("#form1").hide();
        
        
    });


        $("#cancel2").click(function(){
        $("#form2").hide();
        
        
    });





     $("#formButton2").click(function(){
         $("#form1").hide();
        $("#form2").show();

    });
});


</script>
</body>
</html>
