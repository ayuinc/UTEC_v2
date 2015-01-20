<?php global $base_url; ?>
<?php global $theme_path; ?>
<?php $path = $base_url.'/'.$theme_path; ?>
<?php $pathfile= variable_get('file_public_path', conf_path() . '/files/edp-formulario/'); ?>

<?php $titulo = $node->title; ?>   
<?php $body = $node->body['und']['0']['value']; ?>
<?php $field_foto_edp_formulario‎ = $node->field_foto_edp_formulario‎['und']['0']['filename']; ?>


<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<?php $end = end((explode('/', $url))); ?>

<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_foto_edp_formulario‎!='') { ?>
		<img src="<?php print('/'.$pathfile.$field_foto_edp_formulario‎)?>" class="img-responsive mb-35">
	<?php } ?>	
	<?php print $body ?>	
</div>

<div class="container-sm form-custom mt-35"> 
	<form action="" data-submit="Formulario de inscripcion">
	<div class="row">
		<div class="form-group col-sm-1">
			<input id="company" type="radio" name="optionedp" class="form-control">
		</div>		
		<div class="form-group col-sm-5">
			<p><?php print t('Company') ?></p>
		</div>
		<div class="form-group col-sm-1">
			<input id="person" type="radio" name="optionedp" class="form-control">
		</div>		
		<div class="form-group col-sm-5">
			<p><?php print t('Person') ?></p>
		</div>
	</div>
	</form>
		
	<!--COMPANY-->		
	<form action="/registro.php" data-submit="Formulario de inscripcion" id="company_form">
		<input type="hidden" name="origen" value="<?php print $title ?>">
		<input type="hidden" name="origen_tipo" value="company">
		
		
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Company's Legal Name") ?></label>
				<input id="company_legal_name" type="text" class="form-control" placeholder="<?php print t("Company's Legal Name") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("RUC") ?></label>
				<input id="ruc" type="text" class="form-control" placeholder="<?php print t("RUC") ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Country") ?></label>
				<input id="country" type="text" class="form-control" placeholder="<?php print t("Country") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Contact") ?></label>
				<input id="contact" type="text" class="form-control" placeholder="<?php print t("Contact Position") ?>">
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Address") ?></label>
				<input id="address" type="text" class="form-control" placeholder="<?php print t("Address") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Contact Position") ?></label>
				<input id="contact_position" type="text" class="form-control" placeholder="<?php print t("Contact Position") ?>">
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Department") ?></label>
				<input id="department" type="text" class="form-control" placeholder="<?php print t("Department") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Contact e-mail") ?></label>
				<input id="contact_email" type="text" class="form-control" placeholder="<?php print t("Contact e-mail") ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Province") ?></label>
				<input id="province" type="text" class="form-control" placeholder="<?php print t("Province") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Phone") ?></label>
				<input id="phone" type="text" class="form-control" placeholder="<?php print t("Phone") ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("District") ?></label>
				<input id="district" type="text" class="form-control" placeholder="<?php print t("District") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Zip Code") ?></label>
				<input id="zip_code" type="text" class="form-control" placeholder="<?php print t("Zip Code") ?>">
			</div>
		</div>	
		
		<h3><?php print t('Applicant') ?></h3>											
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Name") ?></label>
				<input id="name" type="text" class="form-control" placeholder="<?php print t("Name") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Document type") ?></label>
				<select id="document_type" class="form-control" name="document_type">
					<option value="DNI">DNI</option>
					<option value="<?php print t("Passport") ?>"><?php print t("Passport") ?></option>
					<option value="<?php print t("CE") ?>"><?php print t("CE") ?></option>
				</select>
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Middle Name") ?></label>
				<input id="middle_name" type="text" class="form-control" placeholder="<?php print t("Middle Name") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Number") ?></label>
				<input id="number" type="text" class="form-control" placeholder="<?php print t("Number") ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Last Name") ?></label>
				<input id="last_name" type="text" class="form-control" placeholder="<?php print t("Last Name") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Phone") ?></label>
				<input id="applicant_phone" type="text" class="form-control" placeholder="<?php print t("phone") ?>">
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Gender") ?></label>
				<select id="gender" class="form-control" name="gender">
					<option value="<?php print t("Male") ?>"><?php print t("Male") ?></option>
					<option value="<?php print t("Female") ?>"><?php print t("Female") ?></option>
				</select>
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Academic degrees") ?></label>
				<select id="academic_degree" class="form-control" name="academic_degree">
					<option value="<?php print t("High School") ?>"><?php print t("High School") ?></option>
					<option value="<?php print t("University") ?>"><?php print t("University") ?></option>
					<option value="<?php print t("Master") ?>"><?php print t("Master") ?></option>
					<option value="<?php print t("PHD") ?>"><?php print t("PHD") ?></option>
				</select>
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Birth Date") ?></label>
				<input id="birth_date" type="text" class="form-control" placeholder="<?php print t("Birth Date") ?> (dd/mm/yy)">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Position") ?></label>
				<input id="position" type="text" class="form-control" placeholder="<?php print t("Position") ?>">
			</div>
		</div>									
		<div class="text-right">
			<button type="submit" class="btn btn-primary btn-lg"><?php print t("Send") ?></button>
		</div>
	</form>	
	
	<!--PERSON-->		
	<form action="/registro.php" data-submit="Formulario de inscripcion" id="person_form">
		<input type="hidden" name="origen" value="<?php print $title ?>">
		<input type="hidden" name="origen_tipo" value="person">		
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Name") ?></label>
				<input id="name" type="text" class="form-control" placeholder="<?php print t("Name") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Middle Name") ?></label>
				<input id="middle_name" type="text" class="form-control" placeholder="<?php print t("Middle Name") ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Last Name") ?></label>
				<input id="last_name" type="text" class="form-control" placeholder="<?php print t("Last Name") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Gender") ?></label>
				<select id="gender" class="form-control" name="gender">
					<option value="<?php print t("Male") ?>"><?php print t("Male") ?></option>
					<option value="<?php print t("Female") ?>"><?php print t("Female") ?></option>
				</select>
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Region") ?></label>
				<input id="region" type="text" class="form-control" placeholder="<?php print t("Region") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Province") ?></label>
				<input id="province" type="text" class="form-control" placeholder="<?php print t("Province") ?>">
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("District") ?></label>
				<input id="district" type="text" class="form-control" placeholder="<?php print t("District") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Zip Code") ?></label>
				<input id="zip_code" type="text" class="form-control" placeholder="<?php print t("Zip Code") ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Province") ?></label>
				<input id="province" type="text" class="form-control" placeholder="<?php print t("Province") ?>">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Document type") ?></label>
				<select id="document_type" class="form-control" name="document_type">
					<option value="DNI">DNI</option>
					<option value="<?php print t("Passport") ?>"><?php print t("Passport") ?></option>
					<option value="<?php print t("CE") ?>"><?php print t("CE") ?></option>
				</select>
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Number") ?></label>
				<input id="number" type="text" class="form-control" placeholder="<?php print t("Number") ?>">
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Birth Date") ?></label>
				<input id="birth_date" type="text" class="form-control" placeholder="<?php print t("Birth Date") ?> (dd/mm/yy)">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only">Email</label>
				<input id="email" type="text" class="form-control" placeholder="Email">
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Phone") ?></label>
				<input id="phone" type="text" class="form-control" placeholder="<?php print t("Phone") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Cell Phone") ?></label>
				<input id="cell_phone" type="text" class="form-control" placeholder="<?php print t("Cell Phone") ?>">
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Academic degrees") ?></label>
				<select id="academic_degree" class="form-control" name="academic_degree">
					<option value="<?php print t("High School") ?>"><?php print t("High School") ?></option>
					<option value="<?php print t("University") ?>"><?php print t("University") ?></option>
					<option value="<?php print t("Master") ?>"><?php print t("Master") ?></option>
					<option value="<?php print t("PHD") ?>"><?php print t("PHD") ?></option>
				</select>
			</div>			
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Working Center") ?></label>
				<input id="working_center" type="text" class="form-control" placeholder="<?php print t("Working Center") ?>">
			</div>
		</div>					
		<div class="row">			
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Position") ?></label>
				<input id="position" type="text" class="form-control" placeholder="<?php print t("Position") ?>">
			</div>
		</div>							
		<div class="text-right">
			<button type="submit" class="btn btn-primary btn-lg"><?php print t("Send") ?></button>
		</div>
	</form>					
</div>	

<script>
	$('#company_form').hide();
	$('#person_form').hide();
	
	$('#company').click() {
		$('#company_form').show();
		$('#person_form').hide();
	}
	
	$('#person').click() {
		$('#company_form').hide();
		$('#person_form').show();
	}	
</script>
