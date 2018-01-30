<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view(get_template_directory().'header');
?>

    
      
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-content">
            <div class="row">
              <div class="col-md-2">
                <?php 
                  $size = 170; 
                  $default = site_url().'uploads/images/profile.jpg'; 
                  $default = '';
                  $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $profile->email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size; 
                ?>
                <img src="<?php echo $grav_url; ?>" alt="<?php echo $profile->username;?>" />
                <p class="username"><?php echo $profile->first_name.' '.$profile->last_name;?></p>
                <p class="emailaddress"><?php echo $profile->email;?></p>
              </div>
              <div class="main_content pull-right col-md-6">
                <h3 class="profiletitle"><span class="profile_title"><?php echo $profile->first_name.' '.$profile->last_name;?></span></h3>
                <div class="user_profile">
                  <div class="profile_fields">
                    <label>First name:</label>
                    <span><?php echo $profile->first_name?$profile->first_name:'--';?></span></div>
                  <div class="profile_fields">
                    <label>Last name:</label>
                    <span><?php echo $profile->last_name?$profile->last_name:'--';?></span></div>
                  <div class="profile_fields">
                    <label>Email address:</label>
                    <span><?php echo $profile->email?$profile->email:'--';?></span></div>
                  <div class="profile_fields">
                    <label>Username:</label>
                    <span><?php echo $profile->username?$profile->username:'--';?></span></div>
                  <div class="profile_fields">
                    <label>Phone:</label>
                    <span><?php echo $profile->phone?$profile->phone:'--';?></span></div>
                  <div class="profile_fields">
                    <label>Company:</label>
                    <span><?php echo $profile->company?$profile->company:'--';?></span></div>
                  <div class="profile_fields">
                    <label>Country:</label>
                    <span><?php echo $profile->country?$profile->country:'--';?></span></div>
                  <div class="profile_fields">
                    <label>Website:</label>
                    <span><?php echo $profile->website?$profile->website:'--';?></span></div>
                  <div class="profile_fields">
                    <label>Address:</label>
                    <span><?php echo $profile->address?$profile->address:'--';?></span></div>
                </div>
                <p><a href="<?php echo site_url('auth/profile/editprofile');?>" class="btn btn-warning">Edit profile</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view(get_template_directory().'footer_new'); ?>
