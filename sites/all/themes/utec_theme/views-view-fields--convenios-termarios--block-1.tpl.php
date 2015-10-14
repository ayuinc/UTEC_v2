<?php 

	$semestre = $fields['field_tipo_']->content;
	$name = $fields['title']->content;
	$curso = $fields['field_a_o']->content;
	$creditos = $fields['field_n_mero_creditos']->content;
	$prerequisitos = $fields['field_requisitos']->content;
	$objetivos = $fields['body']->content;
	$carrera = $fields['field_carrera_referencia']->content;
	global $count;
	print $count;

?>
<?php if ($count == 1): ?>	
	print $count;
<tr>
	<td><?php print $carrera; ?></td>
	<td></td>
	<td></td>
</tr>
<?php $count++; ?>
<?php endif ?>
<tr>
	<td><?php print $semestre ?></td>
	<td><?php print $curso ?></td>
	<td><?php print $creditos ?></td>	
	<td><?php print $prerequisitos ?></td>	
	<td><?php print $objetivos ?></td>	
</tr>

















