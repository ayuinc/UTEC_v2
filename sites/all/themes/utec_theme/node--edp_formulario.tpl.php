<?php 

 $titulo = $node->title;   
 $body = $node->body['und']['0']['value'];
 $field_foto_edp_formulario‎ = $node->field_image['und']['0']['uri']; 

?>

<div class="container-sm">
	<h1 class="light"><?php print $title ?></h1>
	<div class="separator-gray separator-lg"></div>
	<?php if ($field_foto_edp_formulario‎!='') { ?>
		<img src="<?php print file_create_url($field_foto_edp_formulario‎); ?>" class="img-responsive mb-35" alt="<?php print $title ?>">
	<?php } ?>	
	<?php print $body ?>	
</div>

<div class="container-sm form-custom mt-35"> 
	<form action="" data-submit="Formulario de inscripcion">
	<p><?php print t('Choose and option') ?></p>
	<div class="row">
		<div class="form-group col-sm-4">
			<a href="#company_form" class="scroll-ref-1"><?php print t('Company') ?></a> | <a href="#person_form" class="scroll-ref-2"><?php print t('Person') ?></a>
		</div>
	</div>
	</form>
		
	<!--COMPANY-->	
	<div id="company_form" data-section-scroll="company_form" class="pv-35">	
	<h2><?php print t('Company') ?></h2>	
	<form action="/registro.php" name="comapny_form" data-submit="Formulario de inscripcion">
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
				<label for="" class="sr-only"><?php print t("Person of Contact") ?></label>
				<input id="contact_person" type="text" class="form-control" placeholder="<?php print t("Person of Contact") ?>">
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Address") ?></label>
				<input id="address" type="text" class="form-control" placeholder="<?php print t("Address") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Position of Contact") ?></label>
				<input id="contact_position" type="text" class="form-control" placeholder="<?php print t("Position of Contact") ?>">
			</div>
		</div>	
		<div class="row">
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Department") ?></label>
				<input id="department" type="text" class="form-control" placeholder="<?php print t("Department") ?>">
			</div>
			<div class="form-group col-sm-6">
				<label for="" class="sr-only"><?php print t("Email of Contact") ?></label>
				<input id="contact_email" type="text" class="form-control" placeholder="<?php print t("Email of Contact") ?>">
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
				<label for="" class="sr-only"><?php print t("Date of Birth") ?></label>
				<input id="birth_date" type="text" class="form-control" placeholder="<?php print t("Date of Birth") ?> (dd/mm/yy)">
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
	</div>
	
	<!--PERSON-->		
	<div id="person_form" data-section-scroll="person_form" class="pv-35">
	<h2><?php print t('Person') ?></h2>	
	<form action="/registro.php" name="person_form" data-submit="Formulario de inscripcion">
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
				<label for="" class="sr-only"><?php print t("Date of Birth") ?></label>
				<input id="birth_date" type="text" class="form-control" placeholder="<?php print t("Date of Birth") ?> (dd/mm/yy)">
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
</div>	

