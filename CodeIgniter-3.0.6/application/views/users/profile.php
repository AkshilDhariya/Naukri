<?php include('header.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<br/>
<?php $user_name=$this->session->userdata('username'); ?>
<div class=container>
	<div class="row">
				<div class="btn btn-success"><h2 style="width:1050px;"><?php echo $user_name ?></h2></div></div></div>
<div class="container" style="margin-top:30px; margin-left:350px;">
	
	<div class="table">
		<table>
			<thead>
			
			<tr>
					<th>S.no</th>
					<th>COMPANY_NAME</th>
					<th>FIELD NAME</th>
					<th>SALARY</th>
					<th>State</th>
					<th>City</th>
			</tr>
			</thead>
			<tbody>
				<?php if(count($question)) :
					$count=$this->uri->segment(3);?>
				<?php foreach($question as $que):?>
					
				<tr>
				<td><?= ++$count; ?></td>
				<td><?php echo $que->company_name; ?></td>
				<td><?php echo $que->field_name; ?></td>
				<td><?php echo $que->salary; ?></td>
				<td><?php echo $que->state_name; ?></td>
				<td><?php echo $que->city_name; ?></td>
				</tr>
				<?php endforeach; ?>
				<?php else : ?>
				<tr>
				<td colspan="3">Not Data Availlable</td>
				</tr>
				<?php endif; ?>
			</tbody>

		</table>
		<div>
		<?php echo $this->pagination->create_links();?>
		</div>
		<div class="row">
		<?= anchor('Home/index','Add Job',['class'=>'btn btn-primary']);
					?>
	</div>
	</div>
</div>
<div class="container" style="margin-top:30px; margin-left:350px;">
						<div class="table"><table>
   						<thead><tr><th><h2>Applied Internship</h2></th></tr></thead>
          				<tbody>
                 <?php
                  if(!$this->session->userdata('que2')): ?>
                    <tr>
                    	<td><h4>You Have Not Applied For Any Internship</h4></td></tr>
                    	<tr><td><a href="<?= base_url('Home/index'); ?> " class="btn btn-primary">Add Internship</a></td></tr>
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