<?php include('header.php');?>
<div class="container" style="margin-top:50px;">
	<h1>Edit Company Field</h1>
	
	<?php echo form_open("company/updatecompany/{$company->id}");?>
	
    <div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="Companyname">Company Name:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter company name','name'=>'company_name','value'=>set_value('company_name',$company->company_name)]);?>
		
	</div></div><div class="col-lg-6"style="margin-top:50px;"><?php echo form_error('company_name'); ?></div></div>
	
	<div class="row">
	<div class="col-lg-6" ">
	<div class="form-group">
		<label for="pwd">Comapny Detail:</label>
		<?php echo form_textarea(['class'=>'form-control','placeholder'=>'Enter Company Details','name'=>'company_detail','value'=>set_value('company_detail',$company->company_detail)]);?>
	</div></div><div class="col-lg-6" style="margin-top:50px;"><?php echo form_error('company_detail'); ?> </div> </div>
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="Field">Field Name:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Field name','name'=>'field_name','value'=>set_value('field_name',$company->field_name)]);?>
		
	</div></div><div class="col-lg-6"style="margin-top:50px;"><?php echo form_error('field_name'); ?></div></div>
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="Salary">Salary:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Salary','name'=>'salary','value'=>set_value('salary',$company->salary)]);?>
		
	</div></div><div class="col-lg-6"style="margin-top:50px;"><?php echo form_error('salary'); ?></div></div>
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="Eligibility">Eligibility:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Eligibility','name'=>'eligibility','value'=>set_value('eligibility',$company->eligibility)]);?>
		
	</div></div><div class="col-lg-6"style="margin-top:50px;"><?php echo form_error('eligibility'); ?></div></div>
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="State">State:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter State','name'=>'state_name','value'=>set_value('state_name',$company->state_name)]);?>
		
	</div></div><div class="col-lg-6"style="margin:30px;"><?php echo form_error('state_name'); ?></div></div>
	<div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="City">City:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter City','name'=>'city_name','value'=>set_value('city_name',$company->city_name)]);?>
		
	</div></div><div class="col-lg-6"style="margin:30px;"><?php echo form_error('city_name'); ?></div></div>
	<br/>
	<div class="row">
	<div class="col-lg-6" ">
	<div class="form-group">
		<label for="body">Select image:</label>
		<?php echo form_upload(['name'=>'userfile']);?>
	</div></div><div class="col-lg-6" style="margin:30px;"><?php if(isset($upload_error)){ echo $upload_error;} ?> </div> </div>
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'submit'])?>
<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'reset'])?>

<?php include('footer.php');?>