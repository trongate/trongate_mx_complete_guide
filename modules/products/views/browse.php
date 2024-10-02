<h1 class="text-center">Products</h1>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Rating</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($rows as $row) { ?>
		<tr>
			<td><?= $row->id ?></td>
			<td><?= out($row->name) ?></td>
			<td><?= out($row->price) ?></td>
			<td><?= $row->rating ?></td>
		</tr><?php
		}
		?>
	</tbody>
</table>