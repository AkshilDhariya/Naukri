<?php include('header.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<br/>
<?php $user_name=$this->session->userdata('username'); ?>
<div class=container>
	<div class="row">
				<div class="btn btn-success"><h2 style="width:1050px;"><?php echo $user_name ?></h2></div></div></div>
<div class=container style="margin-top:30px; margin-left:350px ">
<div class="table"><table>
   <thead><tr><th><h2>Applied company</h2></th></tr></thead>
          <tbody>
                 <?php
                  if(!$this->session->userdata('que2')): ?>
                    <tr><td><h4>You Have Not Applied For Any Company</h4></td></tr>
                    	<tr><td><a href="<?= base_url('Home/index'); ?> " class="btn btn-primary">Add Job</a></td></tr>
                    <?php
                        else : ?>
      					<div class="table">
						<table>
						<thead>
						<tr>
					<th>COMPANY_NAME</th>
					<th>SALARY</th>
					<th>FIELD NAME</th>
					<th>SALARY</th>
					<th>State</th>
					<th>City</th>
					<th>EDIT</th>
						</tr>
						</thead>
						<tbody><tr><td>
						<?php $company_name=$this->session->userdata('company_name'); ?>
						<?php echo $company_name; ?></td>
						<td>
						<?php $field_name=$this->session->userdata('field_name'); ?>
						<?php echo $field_name; ?></td>
						<td>
						<?php $salary=$this->session->userdata('salary'); ?>
						<?php echo $salary; ?></td>
						<td>
						<?php $state_name=$this->session->userdata('state_name'); ?>
						<?php echo $state_name; ?></td>
						<td>
						<?php $city_name=$this->session->userdata('city_name'); ?>
						<?php echo $city_name; ?></td>

     	 				<td><?= anchor("company/edituser",'Edit',['class'=>'btn btn-primary']);?>
        				</td></tr>
        				<?php endif; ?>
						</tbody>

						</table></div>
						<div class="table"><table>
  						 <thead><tr><th><h2>Applied Internship</h2></th></tr></thead>
          				<tbody>
                 		<?php
                  		if(!$this->session->userdata('que2')): ?>
                    	<tr><td><h4>You Have Not Applied For Any Company</h4></td></tr>
                    		<tr><td><a href="<?= base_url('Home/index'); ?> " class="btn btn-primary">Add Job</a></td></tr>
                    <?php
                        else : ?>
      					<div class="table">
						<table>
						<thead>
						<tr>
					<th>Internship Name</th>
					<th>SALARY</th>
					<th>FIELD NAME</th>
					<th>SALARY</th>
					<th>State</th>
					<th>City</th>
					<th>EDIT</th>
						</tr>
						</thead>
						<tbody><tr><td>
						<?php $company_name=$this->session->userdata('company_name'); ?>
						<?php echo $company_name; ?></td>
						<td>
						<?php $field_name=$this->session->userdata('field_name'); ?>
						<?php echo $field_name; ?></td>
						<td>
						<?php $salary=$this->session->userdata('salary'); ?>
						<?php echo $salary; ?></td>
						<td>
						<?php $state_name=$this->session->userdata('state_name'); ?>
						<?php echo $state_name; ?></td>
						<td>
						<?php $city_name=$this->session->userdata('city_name'); ?>
						<?php echo $city_name; ?></td>

     	 				<td><?= anchor("company/edituser",'Edit',['class'=>'btn btn-primary']);?>
        				</td></tr>
        				<?php endif; ?>
						</tbody>

						</table></div>
						<div class="table"><table>
   						<thead><tr><th><h2>Applied Part-Time Job</h2></th></tr></thead>
          				<tbody>
                 <?php
                  if(!$this->session->userdata('que2')): ?>
                    <tr>
                    	<td><h4>You Have Not Applied For Any Part-Time Job</h4></td></tr>
                    	<tr><td><a href="<?= base_url('Home/index'); ?> " class="btn btn-primary">Add PartTime Job</a></td></tr>
                    <?php
                        else : ?>
      					<div class="table">
						<table>
						<thead>
						<tr>
					<th>COMPANY_NAME</th>
					<th>SALARY</th>
					<th>FIELD NAME</th>
					<th>SALARY</th>
					<th>State</th>
					<th>City</th>
					<th>EDIT</th>
						</tr>
						</thead>
						<tbody><tr><td>
						<?php $company_name=$this->session->userdata('company_name'); ?>
						<?php echo $company_name; ?></td>
						<td>
						<?php $field_name=$this->session->userdata('field_name'); ?>
						<?php echo $field_name; ?></td>
						<td>
						<?php $salary=$this->session->userdata('salary'); ?>
						<?php echo $salary; ?></td>
						<td>
						<?php $state_name=$this->session->userdata('state_name'); ?>
						<?php echo $state_name; ?></td>
						<td>
						<?php $city_name=$this->session->userdata('city_name'); ?>
						<?php echo $city_name; ?></td>

     	 				<td><?= anchor("company/edituser",'Edit',['class'=>'btn btn-primary']);?>
        				</td></tr>
        				<?php endif; ?>
						</tbody>

						</table></div></div>
<?php include('footer.php');?>