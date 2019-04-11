<h2>This is product index page</h2>

<table border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Description</th>
		<th>Category_id</th>
		<th>Price</th>
		<th>Actions</th>
	</tr>




<?php foreach($products as $product){ ?>
	<tr><td><?php echo $product->id; ?></td>
	<td><?php echo $product->name; ?></td>
	<td><?php echo $product->description; ?></td>
	<td><?php echo $product->category_id; ?></td>
	<td><?php echo $product->price; ?></td>
	<td><a href="Edit">Edit</a>
		<a href="Delete">Delete</a>
	</td>
	</tr>


<?php } ?>

</table>