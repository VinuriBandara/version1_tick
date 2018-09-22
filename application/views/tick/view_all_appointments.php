
<!DOCTYPE html>
<html lang="en">

  <head>

    <?php $this-> load ->view ('tick/partials/header'); ?>
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




        <title>Registered Users</title>

  </head>

  <body id="page-top">
<div class="container">
 <div class="row bg-white has-shadow">
            <div class="project-title align-items-right">
          <div class="text">
                <h3 class="h4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Upcoming Projects</h3><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Financial Companies</small>
                  </div>
                </div>
             
        </div>

     <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Email Address</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Company</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <?php foreach($appointment_list_finance as $value) { ?>
                <tr>
                  <th scope="row"><?php echo $value -> Email; ?></th>
                  <td><?php echo $value -> FirstName; ?></td>
                  <td><?php echo $value -> LastName; ?></td>
                  <td><?php echo $value -> Company_name; ?></td>
                
                  
                </tr>
              <?php } ?>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>

<br><br>
                    <div class="row bg-white has-shadow">
            <div class="project-title align-items-right">
          <div class="text">
                <h3 class="h4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Upcoming Projects</h3><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Other</small>
                  </div>
                </div>
             
        </div>

     <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Email Address</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                             
                            </tr>
                          </thead>
                          <tbody>
                             <tr>
                              <?php foreach($appointment_list_other as $value) { ?>
               
                  <th scope="row"><?php echo $value -> Email; ?></th>
                  <td><?php echo $value -> FirstName; ?></td>
                  <td><?php echo $value -> LastName; ?></td>
           
              
                  
                </tr>
              <?php } ?>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>



</div>


    <?php $this-> load ->view ('tick/partials/footer'); ?>
</body>
</html>