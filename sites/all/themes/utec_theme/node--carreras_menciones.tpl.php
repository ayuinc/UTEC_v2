<?php

	$titulo = $node->title;
	$cuerpo = $node->body['und']['0']['value'];
	$mencion = $node->field_mencion['und']['0']['value'];
	$electivo = $node->field_electivo['und'];

?>

<?php $count = 0; ?>
<?php foreach ($electivo as $key => $value) : ?>
<tr>
	<?php if ($count == 0): ?>	
		<td class="highlight text-center"><?php print $mencion ?></td>
		<?php else : ?>	
		<td></td>
	<?php endif ?>

	<td><?php print $value['value'] ?></td>
</tr>
<?php $count++; ?>
<?php endforeach; ?>	


