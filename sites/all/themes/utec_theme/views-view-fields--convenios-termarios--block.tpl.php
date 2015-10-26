<?php 

	$name = $fields['title']->content;
	$curso = $fields['field_a_o']->content;
	$creditos = $fields['field_n_mero_creditos']->content;
	$prerequisitos = $fields['field_requisitos']->content;
	$objetivos = $fields['body']->content;
	$carrera = $fields['field_carrera_referencia']->content;


?>

<tr>
	<td class="curso-xs"><?php print $curso; ?></td>
	<td data-title="Credits" class="text-center"><?php print $creditos ?></td>	
	<td data-title="Prerequisites"><?php print $prerequisitos ?></td>	
	<td data-title="Objectives"><?php print $objetivos ?></td>	
</tr>

















