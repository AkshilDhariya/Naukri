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
    </ul>
<?php
          if($this->session->userdata('username')){?>
            <li><a href="<?= base_url('profile/logout'); ?> " class="btn btn-danger">Logout</a></li>

<?php }
          ?>
  </div>
    </nav>
      <?php echo form_open('profile/updateprofile')?>
    <?php $user_name=$this->session->userdata('username'); ?>
    <div class="container" style="margin-top:10px; margin-left:50px;">
      <h2><?php echo $user_name ?></h2>

     <div class="table"><table><thead><tr><th><h2>Education</h2></th></tr></thead>
        <tbody><tr><td>
      <h4><?php echo $user ->education; ?></h4></td>
      <td><?= anchor("company/edituser",'Edit',['class'=>'btn btn-primary']);
          ?>
        </td>
         <td>
          <?= form_open('company/delcompany'),
            
            form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
            form_close();
          ?>


        </td>
        </tr>
         </tbody></table></div>

          <div class="table"><table>
            <thead><tr><th><h2>Job</h2></th></tr></thead>
          
             <tbody>
                 <?php
                  if(!$this->session->userdata('job')): ?>
                    <tr><td><a href="<?= base_url('profile/addjob'); ?> " class="btn btn-primary">Add Job</a></td></tr>
                    <?php
                        else : ?><tr><td>
      <h4><?php echo $user ->job; ?></h4></td>
      <td><?= anchor("company/edituser",'Edit',['class'=>'btn btn-primary']);
          ?>
        </td>
         <td>
          <?= form_open('company/delcompany'),
           
            form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
            form_close();
          ?></td></tr><?php endif; ?></tbody></table></div>


        </td>
        </tr>
         <div class="table"><table><thead><tr><th><h2>internship</h2></th></tr></thead>
        <tbody>
           <?php
                 if(!$this->session->userdata('internship')): ?>
                    <tr><td><a href="<?= base_url('profile/add'); ?> " class="btn btn-primary">Add Internship</a></td></tr>
                    <?php
                        else : ?><tr><td>
                          <tr><td>
      <h4><?php echo $user->internship; ?></h4></td>
      <td><?= anchor("company/edituser",'Edit',['class'=>'btn btn-primary']);
          ?>
        </td>
         <td>
          <?= form_open('company/delcompany'),
            form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
            form_close();
          ?>


        </td>
        </tr><?php endif; ?></tbody>
      </table></div>
    </div>
   

    <div class="container" style="margin-left: 150px;">
    <div class="col-lg-6">
     <a href="<?= base_url('profile/submit'); ?>" class="btn btn-lg btn-primary">Submit</a>
    </div></div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> 
<script src="<?= base_url("Assets/js/bootstrap.js")?>"></script>


</body>
</html>
      
      