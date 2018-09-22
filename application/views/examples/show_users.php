<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to my first CodeIgniter</title>

	
</head>
<body>




<table width="600" border="1" cellpadding="5"> <tr> <th scope="col">Id</th> <th scope="col">User Name</th> <th scope="col">Email</th> <th scope="col">Mobile</th>  </tr> 
	<?php foreach($user_list as $u_key){ ?> 
	<tr> <td><?php echo $u_key->id; ?></td> 
		<td><?php echo $u_key->username; ?></td> 
		<td><?php echo $u_key->password; ?></td> 
		<td><?php echo $u_key->email; ?></td> 
	</tr> 
	<?php } ?>
	</table>



</body>
</html>