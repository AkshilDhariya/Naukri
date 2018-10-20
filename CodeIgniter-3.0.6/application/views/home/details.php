<?php include('header.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<div class=container style="margin-top:20px;margin-left:100px;">
	<div class="row">
				<div class="btn btn-success"><h2 style="width:1050px;"><?php echo $company->company_name ?></h2></div></div></div>
		<div class="form-group">
	<div class=container style="margin-top:50px;margin-left:100px;">
		<div class="row">	
				<h3>Job Field:</h3><tr>
				<div class="col-lg-6">
				<div class="btn btn-danger"><h3 style="width:500px;"><?php echo $company->field_name ?></h3></div></div></div></div>
<div class=container style="margin-top:20px;margin-left:100px;">
	<div class="row">
				<h3>Job Details:</h3>
				<div class="col-lg-6">
				<div class="btn btn-danger"><h3 style="width:500px;"><?php echo $company->company_detail ?></h3></div></div></div></div>
				<div class=container style="margin-top:20px;margin-left:100px;">
	<div class="row">
				<h3>salary:</h3>
				<div class="col-lg-6">
				<div class="btn btn-danger"><h3 style="width:500px;"><?php echo $company->salary ?></h3></div></div></div></div>
				<div class=container style="margin-top:20px;margin-left:100px;">
	<div class="row">
				<h3>Eligibility:</h3>
				<div class="col-lg-6">
				<div class="btn btn-danger"><h3 style="width:500px;"><?php echo $company->eligibility ?></h3></div></div></div></div>
				<div class=container style="margin-top:20px;margin-left:100px;">
	<div class="row">
				<h3>State:</h3>
				<div class="col-lg-6">
				<div class="btn btn-danger"><h3 style="width:500px;"><?php echo $company->state_name ?></h3></div></div></div></div>
				<div class=container style="margin-top:20px;margin-left:100px;">
	<div class="row">
				<h3>City:</h3>
				<div class="col-lg-6">
				<div class="btn btn-danger"><h3 style="width:500px;"><?php echo $company->city_name ?></h3></div></div></div></div>
				<div class=container style="margin-top:50px;margin-left:350px;  ">
				<div class="row">
				<?php
           		if(!$this->session->userdata('username')): ?>
                <a href="<?= base_url('login/index'); ?> " class="btn btn-primary">Please Login</a>
                <?php else : ?>
      			<a href="<?= base_url('profile/que'); ?> " class="btn btn-primary">Apply</a>
      			<?php endif; ?>
				</div></div>



	<?php include('footer.php');?>
