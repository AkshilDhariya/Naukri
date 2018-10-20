<?php include('header.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php $company_name=$this->session->userdata('companyname'); ?>
<div class=container>
	<div class="row">
				<div class="btn btn-success"><h2 style="width:1050px;"><?php echo $company_name ?></h2></div></div></div>

<div class="container" style="margin-top:50px;">
	<div class="row">
		<a href="adduser" class="btn btn-lg btn-primary">Add Company Field</a>
	</div>


<div class="container" style="margin-top:50px;">
	
<?php
	if($msg=$this->session->flashdata('msg')):
		$msg_class=$this->session->flashdata('msg_class');?>
		<div class="row">
			<div class="col-lg-6">
				<div class="alert <?= $msg_class ?>">
					<?php echo $msg; ?>
				</div>
			</div>
		</div>

<?php endif;?>
</div>
	<div class="table">
		<table>
			<thead>
			<tr>
				<th>S.no</th>
				<th>COMPANY_NAME</th>
				<th>FIELD NAME</th>
				<th>SALARY</th>
				<th>Eligibility</th>
				<th>State</th>
				<th>City</th>
				<th>EDIT</th>
				<th>DELETE</th>
			</tr>
			</thead>
			<tbody>
				<?php if(count($companys)) :
					$count=$this->uri->segment(3);?>
				<?php foreach($companys as $cpy):?>
					
				<tr>
				<td><?= ++$count; ?></td>
				<td><?php echo $cpy->company_name; ?></td>
				<td><?php echo $cpy->field_name; ?></td>
				<td><?php echo $cpy->salary; ?></td>
				<td><?php echo $cpy->eligibility; ?></td>
				<td><?php echo $cpy->state_name; ?></td>
				<td><?php echo $cpy->city_name; ?></td>
				<td><?= anchor("company/edituser/{$cpy->id}",'Edit',['class'=>'btn btn-primary']);
					?>
				</td>
				<td>
					<?= form_open('company/delcompany'),
						form_hidden('id',$cpy->id),
						form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
						form_close();
					?>


				</td>
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
	</div>
</div>
<?php include('footer.php');?>