<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id_supplier		</th>
 		<th width="80px">
		      name		</th>
 		<th width="80px">
		      date_add		</th>
 		<th width="80px">
		      date_upd		</th>
 		<th width="80px">
		      active		</th>
 		<th width="80px">
		      logo		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id_supplier; ?>
		</td>
       		<td>
			<?php echo $row->name; ?>
		</td>
       		<td>
			<?php echo $row->date_add; ?>
		</td>
       		<td>
			<?php echo $row->date_upd; ?>
		</td>
       		<td>
			<?php echo $row->active; ?>
		</td>
       		<td>
			<?php echo $row->logo; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>