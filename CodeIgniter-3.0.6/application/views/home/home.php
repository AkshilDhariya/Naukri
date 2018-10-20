<?php include('header.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<center><img src="<?= base_url("download/Job-Searching")?>"alt="" width="1250" height="300"></center>

<div class="container" style="margin-top:30px;">
<center><font color="red"><h4><b><marquee>LOOKING FOR JOB?GET JOB ACCORDING TO ELIGIBLITY</marquee></b></h4></font></center></div>
<div class="container"  style="margin-left:400px;">
	<div class="container" style="margin-top:50px;">
	
<?php
	if($msg5=$this->session->flashdata('msg5')):
		$msg_class5=$this->session->flashdata('msg_class5');?>
		<div class="row">
			<div class="col-lg-6">
				<div class="alert <?= $msg_class5 ?>">
					<?php echo $msg5; ?>
				</div>
			</div>
		</div>

<?php endif;?>
</div>
<?php echo form_open('Users/index');?>
 <div class="row">
	<div class="col-lg-6">
	<div class="form-group">
		<label for="field_name">Enter Field:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Field','name'=>'field_name','value'=>set_value('field_name')]);?>
		
	</div></div><div class="col-lg-6"style="margin:30px;"><?php echo form_error('field_name'); ?></div></div>
	<div class="row">
	<div class="col-lg-6" ">
	<div class="form-group">
		<label for="state">Select State:</label>
		<select name="state" id="state" class="form-control input-lg">
			<option value="">Select State</option>
			<?php
			foreach($state as $row)
			{
				echo '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
			}
			?>
		</select>
	</div></div></div>
	<div class="row">
	<div class="col-lg-6" ">
	<div class="form-group">
		<label for="city">Select City:</label>
		<select name="city" id="city" class="form-control input-lg">
			<option value="">Select City</option>
		</select>
	</div></div></div>
	<div class="container" style="margin-top:30px;margin-left:50px;">
	<div class="row">
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-lg btn-primary','value'=>'Private Jobs'])?>
	<div  style="margin-left:100px;">
<?php echo form_submit(['type'=>'submit','class'=>'btn btn-lg btn-primary','value'=>'Goverment Jobs'])?></div></div></div></div>


		<div class="container" style="margin-top:30px;"><center><img src="<?= base_url("download/j_ser_13")?>"alt="" width="1000" height="300"></center></div>

<?php include('footer.php');?>
<script>
	$(document).ready(function(){
		$('#state').change(function(){
			var state_id = $('#state').val();
			if(state_id != '')
			{
				$.ajax({
					url:"<?php echo base_url(); ?> Home/fetch_city",
					method:"POST",
					data:{state_id:state_id},
					success: function(data)
					{
						 $('#city').html(data);
					}
				});
			}
			else
			{
				 $('#city').html('<option value="">Select State</option>');
			}
		});
	});
</script>