<?php 

	$name = $fields['title']->content;
	$curso = $fields['field_a_o']->content;
	$creditos = $fields['field_n_mero_creditos']->content;
	$prerequisitos = $fields['field_requisitos']->content;
	$objetivos = $fields['body']->content;
	$carrera = $fields['field_carrera_referencia']->content;
	kpr($fields);

?>

<tr>
	<td><?php print $curso; ?></td>
	<td><?php print $creditos ?></td>	
	<td><?php print $prerequisitos ?></td>	
	<td><?php print $objetivos ?></td>	
</tr>

















