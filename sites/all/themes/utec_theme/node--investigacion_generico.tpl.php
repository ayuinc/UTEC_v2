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
					<td class="medium">Investigador</td>
					<td class="medium">Tipo</td>
					<td class="medium">Departamento</td>
					<td class="medium">Publicado en</td>
					<td class="medium">Título</td>
					<td class="medium">Año</td>
					<td class="medium">Estado</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="highlight">Juan Carlos Rodriguez</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Química Industrial</td>
					<td class="text-gray">ACS Catalysis</td>
					<td class="text-gray"><a href="/temporales-investigacion/JR2_6_Switching Selectivity in Oxidation Reactions on Gold_The Mechanism.pdf" target="_blank">Switching Selectivity in Oxidation Reactions on Gold: The Mechanism of C–C vs C–H Bond Activation in the Acetate Intermediate on Au</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>
				</tr>
				<tr>
					<td class="highlight">Melchor Llosa</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">EEGG</td>
					<td class="text-gray">Frontiers in Environmental Engineering (FIEE)</td>
					<td class="text-gray"><a href="/temporales-investigacion/MLL1_7_Analysis of a Externally Modified Combustion Engien to Operate With a Immiscible Fuel of 20 _ Gasoline and 80_ Water.pdf" target="_blank">Analysis of a Externally Modified Combustion Engine to Operate with a Immiscible Fuel of 20% Gasoline and 80% Water</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Melchor Llosa</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">EEGG</td>
					<td class="text-gray">Revista: I+i TECSUP</td>
					<td class="text-gray"><a href="/temporales-investigacion/MLL1_7_Analysis of a Externally Modified Combustion Engien to Operate With a Immiscible Fuel of 20 _ Gasoline and 80_ Water.pdf" target="_blank">Análisis de consumo de un motor de combustión modificado externamente para operar con un combustible inmiscible de 80% agua y 20% gasolina</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Juan Carlos Rodriguez</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Química Industrial</td>
					<td class="text-gray">Journal of the american chemical Society (JACS)</td>
					<td class="text-gray"><a href="/temporales-investigacion/JR4_13_van der Waals interactions determine selectivity in catalysis by metallic gold.pdf" target="_blank">Van der Waals interactions determine selectivity in catalysis by metallic gold</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Arturo Rojas Moreno</td>
					<td class="text-gray">Conference Paper</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">ISIE 2014</td>
					<td class="text-gray"><a href="/temporales-investigacion/AR8_1_Industrial Internet Education_Issues and.pdf" target="_blank">Industrial Internet Education: Issues and Opportunities</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Emir Vela</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">AIP Review of Scientific Instruments</td>
					<td class="text-gray"><a href="/temporales-investigacion/EV1_2_ Contactless automated manipulation of mesoscale objects using opto-fluidic actuation and visual servoing.pdf" target="_blank">Contactless automated manipulation of mesoscale objects using opto-fluidic actuation and visual servoing</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>	
				<tr>
					<td class="highlight">Juan Carlos Cedrón</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Química Industrial</td>
					<td class="text-gray">Rev Soc Quím Perú</td>
					<td class="text-gray"><a href="/temporales-investigacion/JC1_3_ANÁLISIS DE BIODIESEL PREPARADO A PARTIR DE RESIDUOS.pdf" target="_blank">Análisis de biodiesel preparado a partir de residuos de aceite doméstico</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Julien Noel</td>
					<td class="text-gray">Conference Paper</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">7th IET International Conference on Power Electronics, Machines and Drives</td>
					<td class="text-gray"><a href="/temporales-investigacion/JN2_5_Design of an 10 kVA-45 A automatic static transfer switch module.pdf" target="_blank">Design of an 10 kVA-45 A automatic static transfer switch module</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>
				<tr>
					<td class="highlight">Oscar Matallana</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Químico Industrial</td>
					<td class="text-gray">Springer Fachmedien Wiesbaden</td>
					<td class="text-gray"><a href="/temporales-investigacion/OM2_9_Which Are The Main Drivers Behind Residential Electricity Prices.pdf" target="_blank">Análisis de los determinantes (drivers) del precio de la electricidad en Europa</a></td>
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
					<td class="text-gray"><a href="/temporales-investigacion/VM2_11_A Multiscale Optimization Approach to Detect Exudates in the Macula.pdf" target="_blank">A Multiscale Optimization Approach to Detect Exudates in the Macula</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>	
				<tr>
					<td class="highlight">Victor Murray</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">AIAA JOURNAL OF AEROSPACE INFORMATION SYSTEMS</td>
					<td class="text-gray"><a href="/temporales-investigacion/VM1_10_Scalable Open-Source Architecture for Real-Time Monitoring of Adaptive Wiring Panels.pdf" target="_blank">Scalable Open-Source Architecture for Real-Time Monitoring of Adaptive Wiring Panels</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>		
				<tr>
					<td class="highlight">Victor Murray</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Electrónica</td>
					<td class="text-gray">AInternational Journal of Biomedical Imaging</td>
					<td class="text-gray"><a href="/temporales-investigacion/VM3_12_Despeckle Filtering for Multiscale Amplitude-Modulation Frequency_Modulation_AM_FM Texture Analysis of Ultrasound Images of the Intima_Media Complex.pdf" target="_blank">Despeckle Filtering for Multiscale Amplitude-Modulation Frequency-Modulation (AM-FM) Texture Analysis of Ultrasound Images of the Intima-Media Complex</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>		
				<tr>
					<td class="highlight">Jose Mantari</td>
					<td class="text-gray">Artículo</td>
					<td class="text-gray">Mecánica</td>
					<td class="text-gray">Composites Part B - Engineering</td>
					<td class="text-gray"><a href="/temporales-investigacion/JM1_4_Composites_ Part B_Thermoelastic analysis of advanced sandwich plates based on a new quasi-3D hybrid type HSDT with 5 unknowns.pdf" target="_blank">Thermoelastic analysis of advanced sandwich plates based on a new quasi-3D hybrid type HSDT with 5 unknowns</a></td>
					<td class="text-gray">2014</td>
					<td class="text-gray">Publicado</td>					
				</tr>																																				
			</tbody>
		</table>
	<?php } ?>
	
	<!--SOLO PARA CONTACTO-->
	<?php if ($end == 'contacto') { ?>
		<!--FORMULARIO--> 
	<?php } ?>
</div>