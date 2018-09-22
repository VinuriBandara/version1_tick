<!DOCTYPE html>
<html lang="en">

  <head>

  
  <?php $this-> load ->view ('tick/partials/header'); ?>


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
  

    <header class="head3 masthead text-white text-center">

      <div class="containmain1">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url()?>img/manicon.gif" alt="logo">
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Financial company</h2>
           <a href="<?php echo base_url()?>index.php/tick/home/view_financial_appoint"><button type="button" id="formButton">Make Appointment</button> </a>
      </div>


      <div class="containmain2">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url()?>img/manicon.gif" alt="logo">
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Other</h2>
            <a href="<?php echo base_url()?>index.php/tick/home/view_client_appoint"><button type="button" id="formButton2">Make Appointment</button></a>
      </div>

    


    </header>
   




</div>
<?php $this-> load ->view ('tick/partials/footer'); ?>

</body>
</html>
