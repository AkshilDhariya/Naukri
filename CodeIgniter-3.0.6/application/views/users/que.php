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
        <a class="nav-link" href="<?= base_url("profile/que")?>">Resume<span class="sr-only">(current)</span></a>
      </li>

    </ul><?php
          if($this->session->userdata('username')){?>
            <li><a href="<?= base_url('profile/logout'); ?> " class="btn btn-danger">Logout</a></li>

<?php }
          ?>
        </div>
    </nav>
  
   
 
    <?php $user_name=$this->session->userdata('username'); ?>
    <div class="container" style="margin-top:10px; margin-left:50px;">
        <h2><?php echo $user_name ?></h2>
      
        <?php echo form_open("profile/updateprofile");?>
         <?php echo form_hidden('userid',$this->session->userdata('id')) ;?>
                     <div class="row">
                      <div class="col-lg-6">
                     <div class="form-group">
                     <label for="Education"><h4>Education:</h4></label>
                        <?php echo form_input(['class'=>'form-control','placeholder'=>'+ Add Education','name'=>'education','value'=>set_value('education')]);?>
                        </div></div></div><div class="col-lg-6" style="margin:10px;"><?php echo form_error('education'); ?> </div>
                     <div class="row">
    <div class="col-lg-6">
  <div class="form-group">
    <label for="Job"><h4>Jobs:</h4></label>
                        <?php echo form_input(['class'=>'form-control','placeholder'=>'+Add Job','name'=>'job','value'=>set_value('job')]);?>
                        </div></div></div><div class="col-lg-6" style="margin:10px;"><?php echo form_error('job'); ?> </div> 
                         <div class="row">
                         <div class="col-lg-6">
                         <div class="form-group">
                        <label for="Internship"><h4>Internship:</h4></label>
                        <?php echo form_input(['class'=>'form-control','placeholder'=>'+ Add Internship ','name'=>'internship','value'=>set_value('internship')]);?>
                        </div></div></div><div class="col-lg-6" style="margin:10px;"><?php echo form_error('internship'); ?> </div> 
                        

    
    
   <div class="col-lg-6"> <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'submit'])?></div></div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> 
<script src="<?= base_url("Assets/js/bootstrap.js")?>"></script>


</body>
</html>