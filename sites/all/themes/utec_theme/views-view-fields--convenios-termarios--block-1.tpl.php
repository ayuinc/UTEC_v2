<?php 

	$semestre = $fields['field_tipo_']->content;
	$name = $fields['title']->content;
	$curso = $fields['field_a_o']->content;
	$creditos = $fields['field_n_mero_creditos']->content;
	$total_creditos = $creditos;
	$prerequisitos = $fields['field_requisitos']->content;
	$objetivos = $fields['body']->content;
	$carrera = $fields['field_carrera_referencia']->content;
	$count = $fields['counter']->content;
	// print_r($fields);
	$counter = 1;

?>	
<!-- <tr>
	<td><?php //print $carrera; ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr> -->
<tr>
	<td><?php print $semestre ?></td>
	<td><?php print $curso ?></td>
	<td><?php print $carrera ?></td>
	<td><?php print $creditos ?></td>	
	<td><?php print $prerequisitos ?></td>	
	<td><?php print $objetivos ?></td>	
</tr>

















