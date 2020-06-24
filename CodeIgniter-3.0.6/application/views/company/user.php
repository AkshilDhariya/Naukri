<?php include('header.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php $companyname=$this->session->userdata('companyname'); ?>
<div class=container>
	<div class="row">
				<div class="btn btn-success"><h2 style="width:1050px;"><?php echo $companyname ?></h2></div></div></div>

<div class="container" style="margin-top:50px;">
	<div class="table">
		<table>
			<thead>
			<tr>
				<th>S.no</th>
				<th>NAME</th>
				<th>FIELD NAME</th>
				<th>QUESTION</th>
				<th>State</th>
				<th>City</th>
				<th>VIEW RESUME</th>
				<th>CALL FOR INTERVIEW</th>
			</tr>
			</thead>
			<tbody>
				<?php if(count($question)) :
					$count=$this->uri->segment(3);?>
				<?php foreach($question as $cpy):?>
					
				<tr>
				<td><?= ++$count; ?></td>
				<td><?php echo $cpy->username; ?></td>
				<td><?php echo $cpy->field_name; ?></td>
				<td>Ans1:<?php echo $cpy->que1; ?><br/>Ans2:<?php echo $cpy->que2; ?></td>
				<td><?php echo $cpy->state_name; ?></td>
				<td><?php echo $cpy->city_name; ?></td>
				<td><?= anchor("company/resume/{$cpy->userid}",'View Resume',['class'=>'btn btn-primary']);
					?>
				<td><?= anchor("company/resume/{$cpy->userid}",'TAKE INTERVIEW',['class'=>'btn btn-primary']);
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