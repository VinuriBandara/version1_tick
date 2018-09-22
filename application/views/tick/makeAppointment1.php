<!DOCTYPE html>
<html>
    <head>
    <title>Financial Company</title>
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
        
    </head>
    <body>

        <!-- Notification -->
<!--                 <div class="alert"></div> -->
            <div class="row clearfix">
                <div class="col-md-12 column">
                        <div id='calendar'> </div>
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
                                <label class="col-md-4 control-label" for="title">Telephone Number</label>
                                <div class="col-md-4">
                                    <input id="title" name="title" type="text" class="form-control input-md" />
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Property Address</label>
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
        
        <form id="form1" method="post">

              <div class="control-group">
                 <label>Email</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                 
                  <input class="form-control" id="email" name="email" type="email" placeholder="Email address" required="required" data-validation-required-message="Please enter a vallid email address." value=
                      <?php foreach ($email as $username):

                          echo $username;
                    

                       endforeach; ?>>
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <select class="form-control input-xl" size="1" id="prefix" name="prefix" required="required">
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Hon.">Hon.</option>
                    <option value="Dr.">Dr.</option>
                  </select>
                </div>
                <div class="control-group">
                  <label>First Name</label>
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    
                    <input class="form-control" id="name" type="text" name="fname" placeholder="First Name" required="required" >
                    <p class="help-block text-danger"></p>
                  </div>
              </div>

              <div class="control-group">
                 <label>Last Name</label>
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                   
                    <input class="form-control" id="name" type="text" name="lname" placeholder="Last Name" required="required" >
                    <p class="help-block text-danger"></p>
                  </div>
              </div>
             
             


              <div class="control-group">
                <label>Position</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  
                  <input class="form-control" id="position" type="text" name="position" placeholder="Position within the comapny" required="required" ">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <label>Name of the company</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  
                  <input class="form-control" id="company" type="text" name="company" placeholder="Name of the company" required="required" ">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <label>Branch</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  
                  <input class="form-control" id="branch" type="text" name="branch" placeholder="Branch (Optional)"  >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
               <label>Phone Number (format: xxx-xxx-xxxx)</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
        
                  <input class="form-control" id="phone" type="text" placeholder="Phone Number (format: xxx-xxx-xxxx)" name="phone" required="required" pattern="^\d{3}-\d{3}-\d{4}$">
                  <p class="help-block text-danger" ></p>
                </div>
              </div>

               <div class="control-group">
                <label>Purpose of the valuation (Description)</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  
                  <textarea class="form-control" id="purpose" type="text" placeholder="Purpose of the valuation" name="purpose" required="required" ></textarea> 
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                 <label>Name of the property (optional)</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                 
                  <input class="form-control" id="name_property" type="text" placeholder="Name of the property (optional)" name="property_name" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <label>Address line 1</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  
                  <input class="form-control" id="address1" type="text" placeholder="Address line 1" name="address1" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <label>Address line 2</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  
                  <input class="form-control" id="address2" type="text" placeholder="Address line 2" name="address2" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>


              <div class="control-group">
                 <label>Address line 3</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                 
                  <input class="form-control" id="address3" type="text" placeholder="Address line 3" name="address3" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            

              <br>


       
              
   

         <div class="form-group ">
        <input type="submit" class="btn btn-primary btn-xl" id="appoint" name="finance_appointment" value="Make Appointment">
        <input type="reset" class="btn btn-primary btn-xl" value="Clear">
              </div>
 
      </form>
    </body>

</html>



