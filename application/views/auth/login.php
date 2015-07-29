<?php
    $base_url = $this->config->item('base_url'); 
    $resources = $this->config->item('resources');
?>
<div class="small-12 medium-6 large-6 columns">
        <div class="row">
          <div class="small-6 medium-12 medium-centered columns">
            <img src="<?php echo $resources;?>img/prince.jpg" height="400" width="100">        
          </div>
          <div class="small-6 medium-12 medium-centered  columns">
            <img src="<?php echo $resources;?>img/prince.jpg" height="400" width="100">
          </div>   
        </div>
      </div>
<div class="login">
  <div class="row">
    <div class="large-12 columns text-center">
    <h1><?php echo lang('login_heading');?></h1>
    <p><?php echo lang('login_subheading');?></p>
  </div>
  </div>

  <div class="row">
        <div class="loginimg">
            <img src="<?php echo $resources;?>img/penta_ball.png" height="400" width="100">
      </div>
      <div class="small-12 small-centered columns">
        <div id="infoMessage"><?php echo $message;?></div>

      <?php echo form_open("auth/login");?>

      <p>
        <?php echo lang('login_identity_label', 'identity');?>
        <?php echo form_input($identity);?>
      </p>

      <p>
        <?php echo lang('login_password_label', 'password');?>
        <?php echo form_input($password);?>
      </p>

      <p>
        <?php echo lang('login_remember_label', 'remember');?>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
      </p>


      <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

    <?php echo form_close();?>

    <p><a href="forgot_password" class="button"><?php echo lang('login_forgot_password');?></a></p>
      
    </div>
  </div>
</div>



  
 