<html>
<head>
  <title>company list</title>
  <link rel="stylesheet" href="<?=base_url("Assets/css/bootstrap.min.css") ?>">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Naukri+</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url("profile/que")?>">Question<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  <?php
          if($this->session->userdata('username')){?>
            <li><a href="<?= base_url('profile/logout'); ?> " class="btn btn-danger">Logout</a></li>

<?php }
          ?>
        </div>
    </nav>
  
   
 
    <?php $user_name=$this->session->userdata('username'); ?>
    <div class="container" style="margin-top:10px; margin-left:50px;">
        <h2><?php echo $user_name ?></h2>
      <h3>Assessment Questions</h3>
        <?php echo form_open("profile/enter");?>
         <?php echo form_hidden('userid',$this->session->userdata('id')) ;?>
         <?php echo form_hidden('company_name',$this->session->userdata('company_name')) ;?>
         <?php echo form_hidden('field_name',$this->session->userdata('field_name')) ;?>
         <?php echo form_hidden('salary',$this->session->userdata('salary')) ;?>
         <?php echo form_hidden('state_name',$this->session->userdata('state_name')) ;?>
         <?php echo form_hidden('city_name',$this->session->userdata('city_name')) ;?>
         <?php echo form_hidden('username',$this->session->userdata('username')) ;?>
                     <div class="row">
                      <div class="col-lg-6">
                     <div class="form-group">
                     <label for="que1"><h4>Why should you be hired for job?</h4></label>
                        <?php echo form_input(['class'=>'form-control','placeholder'=>'Your answer here','name'=>'que1','value'=>set_value('que1')]);?>
                        </div></div></div><div class="col-lg-6" style="margin:10px;"><?php echo form_error('que1'); ?> </div>
                     <div class="row">
    <div class="col-lg-6">
  <div class="form-group">
    <label for="que2"><h4>Give an link of Your sample work </h4></label>
                        <?php echo form_input(['class'=>'form-control','placeholder'=>'Your answer here','name'=>'que2','value'=>set_value('que2')]);?>
                        </div></div></div><div class="col-lg-6" style="margin:10px;"><?php echo form_error('que2'); ?> </div> 
                         

    
    
   <div class="col-lg-6"> <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Apply'])?></div></div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> 
<script src="<?= base_url("Assets/js/bootstrap.js")?>"></script>


</body>
</html>