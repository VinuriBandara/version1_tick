<!DOCTYPE html>
<html>
    <head>
    <title>Full Calendar CRUD</title>
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
        <form id="form1" method="post">

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email</label>
                  <input class="form-control" id="email" name="email" type="text" placeholder="Email address" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <select class="form-control" id="prefix" name="prefix">
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Hon.">Hon.</option>
                    <option value="Dr.">Dr.</option>
                  </select>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>First Name</label>
                    <input class="form-control" id="name" type="text" name="fname" placeholder="First Name" required="required" >
                    <p class="help-block text-danger"></p>
                  </div>
              </div>

              <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Last Name</label>
                    <input class="form-control" id="name" type="text" name="lname" placeholder="Last Name" required="required" >
                    <p class="help-block text-danger"></p>
                  </div>
              </div>
             
             


              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Position</label>
                  <input class="form-control" id="position" type="text" name="position" placeholder="Position within the comapny" required="required" ">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name of the company</label>
                  <input class="form-control" id="company" type="text" name="company" placeholder="Name of the company" required="required" ">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Branch</label>
                  <input class="form-control" id="branch" type="text" name="branch" placeholder="Branch (Optional)"  >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="text" placeholder="Phone Number" name="phone" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Purpose of the valuation (Description)</label>
                  <textarea class="form-control" id="purpose" type="text" placeholder="Purpose of the valuation" name="purpose" required="required" ></textarea> 
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name of the property (optional)</label>
                  <input class="form-control" id="name_property" type="text" placeholder="Name of the property (optional)" name="property_name" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address line 1</label>
                  <input class="form-control" id="address1" type="text" placeholder="Address line 1" name="address1" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address line 2</label>
                  <input class="form-control" id="address2" type="text" placeholder="Address line 2" name="address2" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>


              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Address line 3</label>
                  <input class="form-control" id="address3" type="text" placeholder="Address line 3" name="address3" required="required" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            

              <br>


        <div class="container">
                <!-- Notification -->
                <div class="alert"></div>
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

                      <div id="success"></div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-xl" id="appoint" name="finance_appointment" value="Make Appointment">
                <input type="reset" class="btn btn-primary btn-xl" value="Clear">
                <input type="button" class="btn btn-primary btn-xl" id="cancel1" value="Close" >
              </div>
 
</form>
    </body>

</html>



