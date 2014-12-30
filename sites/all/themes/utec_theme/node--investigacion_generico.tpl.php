<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/investigacion-generico/'); ?>

<?php $title = $node->title; ?>  
<?php $field_introduccion_inv_generico = $node->field_introduccion_inv_generico['und']['0']['value']; ?>
<?php $field_contenido_inv_generico = $node->field_contenido_inv_generico['und']['0']['value']; ?>
<?php $field_foto_inv_generico = $node->field_foto_inv_generico['und']['0']['filename']; ?>

<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php $end = end((explode('/', $url))); ?>

<div class="container-sm mb-35">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<p class="lead text-gray"><?php print $field_introduccion_inv_generico ?></p>
	<?php if ($field_foto_inv_generico!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_foto_inv_generico)?>" class="img-responsive mb-35">
	<?php } ?>
	<?php print $field_contenido_inv_generico ?>
	
	<!--SOLO PARA RESPALDO-->
	<?php if ($end == 'proyectos') { ?>
		<table class="table mt-35">
			<thead>
				<tr>
					<td>Investigador</td>
					<td>Tipo</td>
					<td>Departamento</td>
					<td>Publicado en</td>
					<td>Título</td>
					<td>Año</td>
					<td>Estado</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="highlight">Juan Carlos Rodriguez</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Química Industrial</td>
					<td class="text-gray">ACS Catalysis</td>
					<td class="text-gray">Switching Selectivity in Oxidation Reactions on Gold: The Mechanism of C–C vs C–H Bond Activation in the Acetate Intermediate on Au</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>
				</tr>
				<tr>
					<td class="highlight">Melchor Llosa</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">EEGG</td>
					<td class="text-gray">Frontiers in Environmental Engineering (FIEE)</td>
					<td class="text-gray">Analysis of a Externally Modified Combustion Engine to Operate with a Immiscible Fuel of 20% Gasoline and 80% Water</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Melchor Llosa</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">EEGG</td>
					<td class="text-gray">Revista: I+i TECSUP</td>
					<td class="text-gray">Análisis de consumo de un motor de combustión modificado externamente para operar con un combustible inmiscible de 80% agua y 20% gasolina</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Juan Carlos Rodriguez</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Química Industrial</td>
					<td class="text-gray">Journal of the american chemical Society (JACS)</td>
					<td class="text-gray">Van der Waals interactions determine selectivity in catalysis by metallic gold</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Arturo Rojas Moreno</td>
					<td class="text-gray">Conference Paper</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">ISIE 2014</td>
					<td class="text-gray">Industrial Internet Education: Issues and Opportunities</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Emir Vela</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">AIP Review of Scientific Instruments</td>
					<td class="text-gray">Contactless automated manipulation of mesoscale objects using opto-fluidic actuation and visual servoing</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>	
				<tr>
					<td class="highlight">Juan Carlos Cedrón</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Química Industrial</td>
					<td class="text-gray">Rev Soc Quím Perú</td>
					<td class="text-gray">Análisis de biodiesel preparado a partir de residuos de aceite doméstico</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Julien Noel</td>
					<td class="text-gray">Conference Paper</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">7th IET International Conference on Power Electronics, Machines and Drives</td>
					<td class="text-gray">Design of an 10 kVA-45 A automatic static transfer switch module</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Oscar Matallana</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Químico Industrial</td>
					<td class="text-gray">Springer Fachmedien Wiesbaden</td>
					<td class="text-gray">Análisis de los determinantes (drivers) del precio de la electricidad en Europa</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>	
				<tr>
					<td class="highlight">Oscar Matallana</td>
					<td class="text-gray">Libro</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">Voluntary Standard Systems</td>
					<td class="text-gray">Implementación de indicadores para medir la sostenibilidad de productos</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>	
				<tr>
					<td class="highlight">Victor Murray</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">IEEE Journal of Biomedical and Health Informatics</td>
					<td class="text-gray">A Multiscale Optimization Approach to Detect Exudates in the Macula</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>	
				<tr>
					<td class="highlight">Victor Murray</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">AIAA JOURNAL OF AEROSPACE INFORMATION SYSTEMS</td>
					<td class="text-gray">Scalable Open-Source Architecture for Real-Time Monitoring of Adaptive Wiring Panels</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>		
				<tr>
					<td class="highlight">Victor Murray</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">AInternational Journal of Biomedical Imaging</td>
					<td class="text-gray">Despeckle Filtering for Multiscale Amplitude-Modulation Frequency-Modulation (AM-FM) Texture Analysis of Ultrasound Images of the Intima-Media Complex</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>		
				<tr>
					<td class="highlight">Jose Mantari</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Mecánica</td>
					<td class="text-gray">Composites Part B - Engineering</td>
					<td class="text-gray">Thermoelastic analysis of advanced sandwich plates based on a new quasi-3D hybrid type HSDT with 5 unknowns</td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>																																				
			</tbody>
		</table>
	<?php } ?>
</div>