<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view(get_template_directory().'header');
?>

      
<div class="row">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-header bg-green">
        <h3><?php echo $profile->first_name.' '.$profile->last_name;?> <span class="badge badge-warning"><?php echo $profile->email;?></span></h3>
      </div>

      <div class="panel-content">
        <div class="row">
          <div class="col-md-3 col-sm-12 col-xs-12">
            <?php 
              $size = 170; 
              $default = site_url().'uploads/images/profile.jpg'; 
              $default = '';
              $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $profile->email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size; 
            ?>
            <img src="<?php echo $grav_url; ?>" alt="<?php echo $profile->username;?>" class="full-width m-b-20" />
          </div>
          <div class="col-md-9 col-sm-12 col-xs-12">
            <?php if(!empty($errors)) { if(is_array($errors)) {  ?>
              <div class="alert alert-danger  alert-dismissible fade in block-inner">
                <button class="close" data-dismiss="alert" type="button">&times;</button>
                <?php foreach($errors as $error) { echo '<p>'.$error.'</p>'; }  ?>
              </div>
            <?php } else { ?>
              <div class="alert alert-danger  alert-dismissible fade in block-inner">
                <button class="close" data-dismiss="alert" type="button">&times;</button>
                <?php echo $errors; ?>
              </div>
            <?php } } ?>
            <?php if(isset($success) && $success!='') { ?>
              <div class="alert alert-success fade in block-inner alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $success; ?>
              </div>
            <?php } ?>
            <?php if(isset($message) && $message!='') { ?>
              <div class="alert alert-success fade in block-inner alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $message; ?>
              </div>
            <?php } ?>
            <?php $attributes = array('class' => 'validate', 'id' => 'editUser'); echo form_open($this->uri->uri_string(), $attributes) ?>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>First name:</label>
                  <?php echo form_input($first_name); ?>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Last name:</label>
                  <?php echo form_input($last_name); ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email address:</label>
                  <?php echo form_input($email); ?>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Username:</label>
                  <?php echo form_input($username); ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Password:</label>
                  <?php echo form_password($password); ?>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Confirm password:</label>
                  <?php echo form_password($confirm_password); ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Phone:</label>
                  <?php echo form_input($phone); ?>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Company:</label>
                  <?php echo form_input($company); ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Country:</label>
                  <?php 
                    $country_atts='data-placeholder="Choose a Country" data-search="true"';
                    $selected_country=$profile->country;
                    if(!isset($selected_country) || $selected_country=='') { $selected_country=''; }
                    echo country_dropdown('country', 'country', 'form-control select-full', $selected_country, array(), '', $selection=NULL, $show_all=TRUE, $country_atts);
                  ?>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Website:</label>
                  <?php echo form_input($website); ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Push bullet Api:</label>
                  <?php echo form_input($pushbulletapi); ?>
                  <span style="font-size:10px;">Get from <a href="https://www.pushbullet.com/#settings/account" target="_blank">https://www.pushbullet.com/#settings/account</a></span>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Address:</label>
                  <?php echo form_textarea($address); ?>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-actions">
                  <?php echo form_button($submit);?> 
                </div>
              </div>
            </div>  
            
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      
<?php $this->load->view(get_template_directory().'footer_new'); ?>
