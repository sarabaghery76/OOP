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
</style>

<table>
	<tr>
		<th>id</th>
		<th>title</th>
		<th>excerpt</th>
                <th>read more</th>
		<th>delete</th>
	</tr>
	
	<?php 
		while($news = $allNews->fetch_assoc()){
	?>
	<tr>
		<td><?php echo $news["id"]; ?></td>
		<td><?php echo $news["title"]; ?></td>
		<td><?php echo $news["excerpt"]; ?></td>
		<td><?php echo $news["readMore"]; ?></td>
		<td><a class="remove" href="./news&method=delete_news&id=<?php echo $news["id"]; ?>">X</a></td>
	</tr>
	<?php
		} // end of while
	?>
</table>