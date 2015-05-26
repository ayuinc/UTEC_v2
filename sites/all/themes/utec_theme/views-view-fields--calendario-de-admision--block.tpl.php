<?php 

	$name = $fields['title']->content;
	$eventos = explode("----", $fields['field_texo']->content);
	$fechas = explode("----", $fields['field_fecha']->content);
	$count = 0;
?>

<?php foreach ($eventos as $key => $evento) : ?>
<tr>
	<?php if ($count == 0) : ?>
	<td class="highlight"><?php print $name; ?></td>
	<?php else : ?>
	<td></td>
	<?php endif; 
		$count ++;
	?>
		<td><?php print $evento; ?></td>
		<td><?php print $fechas[$key]; ?></td>	
</tr>
<?php endforeach; ?>
















