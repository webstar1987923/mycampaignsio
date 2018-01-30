<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view(get_template_directory().'header');
?>

<div class="row"> 
  <div class="col-md-12">
    <div class="panel"> 
      <div class="panel-header bg-green">
        <h3>Edit Groups</h3>
      </div>

      <div class="panel-content">
        <form class="validate" id="editGroup" action="<?php echo site_url(); ?>editgroups" method="post" onsubmit="return validate();">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Group name:</label>
                <input type="text" name="group_name" id="group_name" class="form-control" value="<?php echo $groupdetail['group_name']; ?>">
                <input type="hidden" name="groupid" value="<?php echo $groupdetail['id']; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <button name="button" type="Submit" class="btn btn-warning" id="button" value="true" style="margin-top:25px;">Edit Group</button>
              </div>
            </div>
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
    if($('#group_name').val() == ''){
        alert('Please enter group name');
        return false;
    } 
    return true;
  }

</script>
