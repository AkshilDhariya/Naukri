<?php include('header.php');?>
<div class="container" style="margin-top:50px;">
	<h1>Register form</h1>
<?php echo form_open('company/sendmail')?>
    <div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="companyname">Company name:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Company Name','name'=>'companyname','value'=>set_value('companyname')]);?>
		
	</div></div><div class="col-lg-6"style="margin:30px;"><?php echo form_error('companyname'); ?></div></div>
	
	<div class="row">
	<div class="col-lg-6" ">
	<div class="form-group">
		<label for="pwd">Password:</label>
		<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter password','type'=>'password','name'=>'password','value'=>set_value('password')]);?>
	</div></div><div class="col-lg-6" style="margin:30px;"><?php echo form_error('password'); ?> </div> </div>
	<div class="row">
	<div class="col-lg-6" ">
	<div class="form-group">
		<label for="First Name">First Name:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter firstname','name'=>'firstname','value'=>set_value('firstname')]);?>
	</div></div><div class="col-lg-6" style="margin:30px;"><?php echo form_error('firstname'); ?> </div> </div>
	<div class="row">
	<div class="col-lg-6" ">
	<div class="form-group">
		<label for="First Name">Last Name:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter lastname','name'=>'lastname','value'=>set_value('lastname')]);?>
	</div></div><div class="col-lg-6" style="margin:30px;"><?php echo form_error('lastname'); ?> </div> </div>
	    <div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="Email">Email:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email')]);?>
		
	</div></div><div class="col-lg-6"style="margin:30px;"><?php echo form_error('email'); ?></div></div>
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'submit'])?>
<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'reset'])?>
<?php include('footer.php');?>