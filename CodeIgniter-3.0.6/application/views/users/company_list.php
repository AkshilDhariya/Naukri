<?php include('header.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
    	$("#myInput").on("keyup",function(){
    	var value = $(this).val().toLowerCase();
    	$("#myTable tr").filter(function(){
    	$(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
    	});
    });
  });
</script>
  <div class="container" style="margin-top:20px;">
	
	
	<div class="row">	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>s.no</th>
				<th>company logo</th>
				<th>company name</th>
				<th>Field</th>
				<th>Salary</th>
				<th>State</th>
				<th>City</th>
				<th>Published on</th>
			</tr>
		</thead>
		<tbody id="myTable">

				<?php if(count($companys)) :
					$count=$this->uri->segment(4);?>
				<?php foreach($companys as $cpy):?>
					
				<tr>
				<td><?= ++$count; ?></td>
				<?php if(!is_null($cpy->image_path)){?>
				<td><img src="<?php echo $cpy->image_path ?>" alt="" width="280" height="200"></td>
				<?php } ?>
				<td><?= anchor("company/details/{$cpy->id}",$cpy->company_name); ?></td>
				<td><?php echo $cpy->field_name; ?></td>
				<td><?php echo $cpy->salary; ?></td>
				<td><?php echo $cpy->state_name; ?></td>
				<td><?php echo $cpy->city_name; ?></td>
				<td><?= date('d M y H:i:s',strtotime($cpy->created_at));?></td>
				</tr>
				<?php endforeach; ?>
				<?php else : ?>
				<tr>
				<td colspan="3">Not Data Availlable</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table></div>
		<div>
		<?php echo $this->pagination->create_links();?>
		</div>
	</div>
<?php include('footer.php');?>