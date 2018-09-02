<!DOCTYPE html>
<html lang="en">

  <head>

 <?php $this-> load ->view ('tick/partials/header'); ?>

     <title>Schedule</title>

  </head>

  <body id="page-top">
<?php $this-> load ->view ('tick/partials/nav_bar'); ?>
   

<!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/tick_value/land-valuation" style="min-width:320px;height:580px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
<!-- Calendly inline widget end -->
   

    <!-- Footer -->
    <?php $this-> load ->view ('tick/partials/footer'); ?>
  </body>

</html>
