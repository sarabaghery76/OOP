<style>
	*{
		margin: 0;
		padding: 0;
	}
	th{
		background: #555;
		color: #fff;
		padding: 10px;
		border: none;
	}
	
	tr:nth-child(odd){
		background: #ddd;
	}
	
	.remove{
		color: #f00;
	}
	.update{
		color: #0f0;
	}
</style>

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>phone</th>
		<th>message</th>
		<th>delete</th>
		<th>edit</th>
	</tr>
	
	<?php 
		while($messages = $allMessages->fetch_assoc()){
	?>
	<tr>
		<td><?php echo $messages["id"]; ?></td>
		<td><?php echo $messages["name"]; ?></td>
		<td><?php echo $messages["email"]; ?></td>
		<td><?php echo $messages["phone"]; ?></td>
		<td><?php echo $messages["message"]; ?></td>
		<td><a class="remove" href="./contact_us&method=delete_message&id=<?php echo $messages["id"]; ?>">حذف</a></td>
		<td><a class="update" href="./contact_us&method=edit_message&id=<?php echo $messages["id"]; ?>">ویرایش</a></td>
	</tr>
	<?php
		} // end of while
	?>
</table>