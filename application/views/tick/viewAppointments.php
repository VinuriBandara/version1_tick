<!DOCTYPE html>
<html>
    <head>
    <title>Appointment</title>
        <?php $this-> load ->view ('tick/partials/header'); ?>

 <meta charset='utf-8' />
        <link href="<?php echo base_url();?>cal_style/css/bootstrap.min.css" rel="stylesheet">
        <link href='<?php echo base_url();?>cal_style/css/fullcalendar.css' rel='stylesheet' />
        <link href="<?php echo base_url();?>cal_style/css/bootstrapValidator.min.css" rel="stylesheet" />        
        <link href="<?php echo base_url();?>cal_style/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
        <!-- Custom css  -->
        <link href="<?php echo base_url();?>cal_style/css/custom.css" rel="stylesheet" />

        <script src='<?php echo base_url();?>cal_style/js/moment.min.js'></script>
        <script src="<?php echo base_url();?>cal_style/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>cal_style/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>cal_style/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url();?>cal_style/js/fullcalendar.min.js"></script>
        <script src='<?php echo base_url();?>cal_style/js/bootstrap-colorpicker.min.js'></script>
        

        <script src='<?php echo base_url();?>cal_style/js/main.js'></script>
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

        
    </head>
    <body>

        <div class="container">
                <!-- Notification -->
               
            <div class="row clearfix">
                <div class="col-md-12 column">
                        <div id='calendar'></div>
                </div>
            </div>
        </div>
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="error"></div>
                        <form class="form-horizontal" id="crud-form">
                        <input type="hidden" id="start">
                        <input type="hidden" id="end">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Title</label>
                                <div class="col-md-4">
                                    <input id="title" name="title" type="text" class="form-control input-md" />
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="color">Color</label>
                                <div class="col-md-4">
                                    <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                                    <span class="help-block">Click to pick a color</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
         </body>

</html>



