<nav class="navbar navbar-expand-lg fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <?php  
  foreach ($email as $username):?>

          <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url()?>index.php/tick/home/?username=<?php echo $username?>">Tick Value</a> 
    <?php endforeach; ?>
       
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url()?>index.php/tick/home/use_this">Why TickValue?</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="about.html">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Contact</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url()?>index.php/tick/home/profile">Appointment</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Help">Help</a>
            </li>
              &nbsp;&nbsp;  &nbsp;&nbsp;
                <li class="nav-item mx-0 mx-lg-1" >
              <p class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger username" >
                <?php  
                foreach ($email as $username):

                        echo $username;
                   endforeach; 
               

                   ?></p>


            </li>
            <li class="nav-item mx-0 mx-lg-1" >
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url()?>index.php/tick/home/logout" id="log">Logout</a>
            </li>
        

          
          </ul>
        </div>
      </div>
       </nav>