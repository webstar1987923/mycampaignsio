<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view(get_template_directory().'header');
?>

<div class="row"> 
  <!-- Content -->
  <div class="col-md-12">
    <div class="panel"> 
      
      <!-- Page header -->
      <div class="panel-header bg-green">
          <h3>Add Sub User</h3>
      </div>
      <form class="validate" id="addUser" action="<?php echo site_url(); ?>addsubuser" method="post" onsubmit="return validate();">
        <div class="panel-content">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>First name:</label>
                <input type="text" name="first_name" id="first_name" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Last name:</label>
                <input type="text" name="last_name" id="last_name" class="form-control">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Email address:</label>
                <input type="text" name="email" id="email" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" id="username" class="form-control">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" id="password" class="form-control">
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Confirm password:</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control">
              </div>
            </div>
          </div>
        </div>

        <div class="panel-footer">
          <button name="button" type="Submit" class="btn btn-warning" id="button" value="true">Add Subuser</button>
        </div>
      <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view(get_template_directory().'footer_new'); ?>
<script type="text/javascript">
  function validate()
  {
    if($('#first_name').val() == ''){
        alert('Please enter first name');
        return false;
    } 
    if($('#last_name').val() == ''){
        alert('Please enter last name');
        return false;
    } 
    if($('#email').val() == ''){
        alert('Please enter email');
        return false;
    } 
    if($('#username').val() == ''){
        alert('Please enter username');
        return false;
    } 
    if($('#password').val() == ''){
        alert('Please enter password');
        return false;
    } 
    if($('#confirm_password').val() == ''){
        alert('Please enter confirm password');
        return false;
    } 
    if(($('#confirm_password').val() !='' && $('#password').val() != '') && $('#confirm_password').val() != $('#password').val()){
        alert("Password and confirm password doesn't match");
        return false;
    } 
    return true;
  }

</script>
