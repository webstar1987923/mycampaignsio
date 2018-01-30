<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view(get_template_directory().'header');
?>

      <!-- Page header -->
    
    <div class="row">
      <div class="col-md-8">
        <div class="panel">
          <div class="panel-header bg-green">
            <h3><?php echo $profile->first_name.' '.$profile->last_name;?> <span class="badge badge-warning"><?php echo $profile->email;?></span> <a href="<?php echo site_url('auth/profile/editprofile');?>" class="btn btn-sm btn-rounded btn-warning pull-right">Edit profile</a></h3>
          </div>
          <div class="panel-content">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <?php 
                  $size = 170; 
                  $default = site_url().'uploads/images/profile.jpg';
                  $default = '';
                  $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $profile->email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size; 
                ?>
                <img src="<?php echo $grav_url; ?>" alt="<?php echo $profile->username;?>" class="full-width m-b-20" />
              
                
              </div>
              <div class="pull-right col-md-8 col-sm-8 col-xs-12">
                <div class="profile-line">
                  <label>Name:</label>
                  <span><?php echo $profile->first_name?$profile->first_name:'--';?> <?php echo $profile->last_name?$profile->last_name:'--';?></span>
                </div>
                <div class="profile-line">
                  <label>Email address:</label>
                  <span><?php echo $profile->email?$profile->email:'--';?></span>
                </div>
                <div class="profile-line">
                  <label>Username:</label>
                  <span><?php echo $profile->username?$profile->username:'--';?></span>
                </div>
                <div class="profile-line">
                  <label>Phone:</label>
                  <span><?php echo $profile->phone?$profile->phone:'--';?></span>
                </div>
                <div class="profile-line">
                  <label>Company:</label>
                  <span><?php echo $profile->company?$profile->company:'--';?></span>
                </div>
                <div class="profile-line">
                  <label>Country:</label>
                  <span><?php echo $profile->country?$profile->country:'--';?></span>
                </div>
                <div class="profile-line">
                  <label>Website:</label>
                  <span><?php echo $profile->website?$profile->website:'--';?></span>
                </div>
                <div class="profile-line">
                  <label>Address:</label>
                  <span><?php echo $profile->address?$profile->address:'--';?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="panel">
          <div class="panel-header bg-primary">
            <h3>API Keys</h3>
          </div>
          <div class="panel-content">
            <label>Pushbullet API: </label>
            <span ><?php echo $profile->pushbullet_api ? $profile->pushbullet_api : 'not added'; ?></span>
          </div>
        </div>
      </div>
    </div>
<?php $this->load->view(get_template_directory().'footer_new'); ?>
