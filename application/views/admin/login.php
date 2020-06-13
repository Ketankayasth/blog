<!DOCTYPE html>
<html>
   <head>
      <title>Blog | Login</title>
      <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
     
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-md-4 offset-md-4" style="padding-top: 50px;">
               <?php $errorMsg = $this->session->userdata('errorMsg'); ?>
               <?php if(!empty($errorMsg)) { ?>
               <div class="alert alert-danger" role="alert">
                  <?php echo $errorMsg; ?>
               </div>
               <?php } ?>
               <form name="loginform" id="loginform" method="post">
               	<h3 class="text-center" style="padding-bottom: 15px;">Please Sign In</h3>
                  <div class="form-group">
                     <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>" placeholder="Enter Username">
                     <p><?php echo form_error('username'); ?></p>
                    
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Enter Password">
                     <p><?php echo form_error('password'); ?></p>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>