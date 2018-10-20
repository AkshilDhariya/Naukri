<?php include('header.php');?>
<div class="container" style="margin-top:50px;">
	<h2>User Login</h2>
	<?php
	if($user=$this->session->flashdata('user')):
		$user_class=$this->session->flashdata('user_class');?>
		<div class="row">
			<div class="col-lg-6">
				<div class="alert <?= $user_class ?>">
					<?php echo $user; ?>
				</div>
			</div>
		</div>

<?php endif;?>
	<?php
	if($users=$this->session->flashdata('users')):
		$users_class=$this->session->flashdata('users_class');?>
		<div class="row">
			<div class="col-lg-6">
				<div class="alert <?= $users_class ?>">
					<?php echo $users; ?>
				</div>
			</div>
		</div>

<?php endif;?>

	<?php
	if($error=$this->session->flashdata('Login_failed')):?>
		<div class="row">
			<div class="col-lg-6">
				<div class="alert alert-danger">
					<?php echo $error; ?>
				</div>
			</div>
		</div>
<?php endif;?>
<?php echo form_open('login');?>
    <div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="Username">Username:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter username','name'=>'username','value'=>set_value('username')]);?>
		
	</div></div><div class="col-lg-6"style="margin:30px;"><?php echo form_error('username'); ?></div></div>
	
	<div class="row">
	<div class="col-lg-6" ">
	<div class="form-group">
		<label for="pwd">Password:</label>
		<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter password','type'=>'password','name'=>'password','value'=>set_value('password')]);?>
	</div></div><div class="col-lg-6" style="margin:30px;"><?php echo form_error('password'); ?> </div> </div><br/>
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'submit'])?>
<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'reset'])?>
<?php echo anchor('profile/register','sign up?','class="link-class"')?>
<h3 style="margin-left:50px; margin-top:20px;">OR</h3>
<div class="container" style="margin-top:20px;">
	<div class="row">
		<a href="<?= base_url("clogin/index")?>" class="btn btn-lg btn-primary">Company Login</a>
	</div>

<?php include('footer.php');?>