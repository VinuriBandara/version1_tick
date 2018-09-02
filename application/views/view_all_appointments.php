
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

<table>
  <?php foreach($appointment_list_finance as $value) { ?>
  <tr>
    <td><?php echo $value -> Email; ?></td>
    <td><?php echo $value -> FirstName; ?></td>
    <td><?php echo $value -> LastName; ?></td>
    <td><?php echo $value -> Company_name; ?></td>
    <td><?php echo $value -> Purpose; ?></td>
    
  </tr>
<?php } ?>

  <?php foreach($appointment_list_other as $value) { ?>
  <tr>
    <td><?php echo $value -> Email; ?></td>
    <td><?php echo $value -> FirstName; ?></td>
    <td><?php echo $value -> LastName; ?></td>
    <td><?php echo $value -> Purpose; ?></td>
  </tr>
<?php } ?>



</table>











</body>
</html>