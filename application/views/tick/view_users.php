 
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



        <title>Registered Users</title>

  </head>

  <body id="page-top">
<!-- <nav class="navbar navbar-expand-lg fixed-top text-uppercase" id="mainNav">
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
 


<html>
 -->
<table>
  <?php foreach($user_list as $value) { ?>
  <tr>
    <td><?php echo $value -> Email; ?></td>
    <td><?php echo $value -> FirstName; ?></td>
    <td><?php echo $value -> LastName; ?></td>
    <td><?php echo $value -> DateExpected; ?></td>
    <?php echo "<td><a href='do_request?email=".$value-> Email."'>Accept</a></td>"; ?> 
    <?php echo "<td><a href='ignore_request?email=".$value-> Email."'>Ignore</a></td>"; ?>
  </tr>
<?php } ?>



</table>










</html>

</body>
</html>