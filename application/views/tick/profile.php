<!DOCTYPE html>
<html lang="en">
  <head>

  <?php $this-> load ->view ('tick/partials/header'); ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
	
    <title>Profile</title>
    <style>
    a,a:visited
    {
      color:white;
    }


  </style>


  </head>
  <body>
 
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
    <div class="container profile_container"><br>

<br><br><br><br>
<div class="row">

  <div class="col-sm-6">
    <div class="card">
      <h4 class="card-header bg-dark text-white">Gagana Rathnayaka
      <div class="float-right small">
        <a class="btn btn-raised btn-danger" href="<?php echo base_url()?>index.php/tick/home/show_ratings?valuer_id=1" title="View profile" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
          </a>
          <a class="btn btn-raised btn-danger" href="mailto:tickvalue@gmail.com" title="Send an email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
          <a class="btn btn-raised btn-danger" href="<?php echo base_url()?>index.php/tick/home/view_appoint" title="Make appointment">
            <i class="fa fa-calendar" aria-hidden="true"></i>
          </a>
      </div>
      </h4>
      <div class="card-body">
          <div class="image float-left user-l">
            <img src="<?php echo base_url(); ?>img/valuer1.jpg" class="img-thumbnail" alt="avatar"/>
          </div>
        <h4 class="card-title">About</h4>
          <p class="card-text">Address : "Wedaniwasa", Dahigamuwa, Kurunegala <br> Reference No : SADB/M/01/002 <br> Incorporated Valuer <br> B.Sc. Estate Management and Valuation (Special)<br> Completed projects : 5</p>
      </div>
    </div>
  </div>
            
  <div class="col-sm-6">
    <div class="card">
      <h4 class="card-header text-right bg-dark text-white">Shanal Mendis
      <div class="float-left small">
        <a class="btn btn-raised btn-danger" href="#" title="View profile" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
          </a>
          <a class="btn btn-raised btn-danger" href="#" title="Send an email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
          <a class="btn btn-raised btn-danger" href="#" title="Make appointment">
            <i class="fa fa-calendar" aria-hidden="true"></i>
          </a>
      </div>
      </h4>
      <div class="card-body">
          <div class="image float-right user-r">
              <img src="<?php echo base_url(); ?>img/valuer2.jpg" class="img-thumbnail" alt="avatar"/>
          </div>
        <h4 class="card-title">About</h4>
          <p class="card-text">Address : "Luvis place", Kurunegala<br> Reference No : SADB/M/01/089 <br> Incorporated Valuer <br> B.Sc. Estate Management and Valuation (Special)<br> Completed projects : 5</p>
      </div>
    </div>
  </div>

</div>

<div class="row" id="profile_container">

  <div class="col-sm-6">
    <div class="card">
      <h4 class="card-header bg-dark text-white">Mayura Rathnasooriya
      <div class="float-right small">
        <a class="btn btn-raised btn-danger" href="#" title="View profile" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
          </a>
          <a class="btn btn-raised btn-danger" href="#" title="Send an email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
          <a class="btn btn-raised btn-danger" href="#" title="Make appointment">
            <i class="fa fa-calendar" aria-hidden="true"></i>
          </a>
      </div>
      </h4>
      <div class="card-body">
          <div class="image float-left user-l">
            <img src="http://31.media.tumblr.com/tumblr_lw2lhqjrel1qfmi03o9_r1_500.gif" class="img-thumbnail" alt="avatar"/>
          </div>
        <h4 class="card-title">About</h4>
          <p class="card-text">Address : No.24, Thelwaththa junction , Kurunegala<br> Reference No : SADB/M/01/090 <br> Incorporated Valuer <br> B.Sc. Estate Management and Valuation (Special)<br> Completed projects : 3</p>
      </div>
    </div>
  </div>
            
  <div class="col-sm-6">
    <div class="card">
      <h4 class="card-header text-right bg-dark text-white">Shamara Perera
      <div class="float-left small">
        <a class="btn btn-raised btn-danger" href="#" title="View profile" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
          </a>
          <a class="btn btn-raised btn-danger" href="#" title="Send an email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
          <a class="btn btn-raised btn-danger" href="#" title="Make appointment">
            <i class="fa fa-calendar" aria-hidden="true"></i>
          </a>
      </div>
      </h4>
      <div class="card-body">
          <div class="image float-right user-r">
            <img src="http://31.media.tumblr.com/tumblr_lw2lhqjrel1qfmi03o9_r1_500.gif" class="img-thumbnail" alt="avatar"/>
          </div>
        <h4 class="card-title">About</h4>
          <p class="card-text">Address : No.23/A, Aluthwaththa, Kurunegala.<br> Reference No : SADB/M/01/102 <br> Incorporated Valuer <br> B.Sc. Estate Management and Valuation (Special)<br> Completed projects : 1</p>
      </div>
    </div>
  </div>

</div>
<div class="row">

  <div class="col-sm-6">
    <div class="card">
      <h4 class="card-header bg-dark text-white">Chamara de Silve
      <div class="float-right small">
        <a class="btn btn-raised btn-danger" href="#" title="View profile" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
          </a>
          <a class="btn btn-raised btn-danger" href="#" title="Send an email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
          <a class="btn btn-raised btn-danger" href="#" title="Make appointment">
            <i class="fa fa-calendar" aria-hidden="true"></i>
          </a>
      </div>
      </h4>
      <div class="card-body">
          <div class="image float-left user-l">
            <img src="http://31.media.tumblr.com/tumblr_lw2lhqjrel1qfmi03o9_r1_500.gif" class="img-thumbnail" alt="avatar"/>
          </div>
        <h4 class="card-title">About</h4>
          <p class="card-text">Address : "Sumudu Sewana", Nelumdeniya, Kurunegala<br> Reference No : SADB/M/02/002 <br> Incorporated Valuer <br> B.Sc. Estate Management and Valuation (Special)<br> Completed projects : 0</p>
      </div>
    </div>
  </div>
          

</div>
</div>

  <hr>

   
    </div>

<?php $this-> load ->view ('tick/partials/footer');  ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://unpkg.com/popper.js@1.12.5/dist/umd/popper.js"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/js/bootstrap-material-design.js"></script>

  </body>