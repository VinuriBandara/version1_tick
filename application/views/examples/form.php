<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to my first CodeIgniter</title>

	
</head> 
            <?php
                echo form_open('form/data_submitted');
                echo form_label('User Name :', 'u_name');
                $input1_data = array(
                    'name' => 'u_name',
                    'placeholder' => 'Please Enter User Name',
                    'class' => 'input_box'
                );
                echo form_input($input1_data);
                echo "<br/><br/>";
                echo form_label('User email&nbsp;&nbsp;:', 'u_email');
                $input2_data = array(
                    'type' => 'email',
                    'name' => 'u_email',
                    'placeholder' => 'Please Enter Email Address',
                    'class' => 'input_box'
                );
                echo form_input($input2_data);
                ?>
                    </div>
                    <div id="form_button">
                        <?php echo form_submit('submit', 'Submit', "class='submit'"); ?>
                    </div>                   
               <?php echo form_close();?>




</html>