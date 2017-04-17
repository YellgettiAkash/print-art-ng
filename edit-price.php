
	<table class="table table-boardred">
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
		</tr>	
	</thead>
	<tbody>
		<tr>
			<td><?= $array[$category]['name'] ?></td>
			<td><?= $array[$category]['price'] ?></td>
		</tr>
		<?php  foreach ($array[$category]['category'] as $keys => $values) { ?>
			<?php  foreach ($values['subcategory'] as $key => $value) { ?>
				<?php  foreach ($value['categories'] as $k => $v) { ?>
					<tr>
						<td><?= $v['name'] ?></td>
						<td><?= $v['price'] ?></td>
					</tr>
				<?php } ?>
			<?php } ?>
		<?php } ?>
		
	</tbody>
	</table>
