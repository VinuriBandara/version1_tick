<html>

<table>
	<?php foreach($user_list as $value) { ?>
	<tr>
		<td><?php echo $value -> id; ?></td>
		<td><?php echo $value -> first_name; ?></td>
		<td><?php echo $value -> last_name; ?></td>
		<td><?php echo $value -> email; ?></td>
		<?php echo "<td><a href='delete_data?id=".$value->id."'>Delete</a></td>"; ?>
		<?php echo "<td><a href='update_data?id=".$value->id."'>Update</a></td>"; ?>
	</tr>
<?php } ?>



</table>










</html>