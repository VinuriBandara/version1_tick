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


 <section id="contact">
      <div class="container">
   <table class="table show_users" >

  <?php foreach($user_list as $value) { ?>
  <tr>
    <td><?php echo $value -> Email; ?></td>
    <td><?php echo $value -> FirstName." ".$value -> LastName; ?></td>
    <td><?php echo $value -> DateExpected; ?></td>
    <?php echo "<td><a href='do_request?email=".$value-> Email."'>Accept</a></td>"; ?> 
    <?php echo "<td><a href='ignore_request?email=".$value-> Email."'>Ignore</a></td>"; ?>
  </tr>
<?php } ?>



</table>

        </div>
  
    </section>
  



</body>
</html>
