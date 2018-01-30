<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view(get_template_directory().'header');
?>

  <div class="row"> 
    <div class="col-md-12">
      <form action="<?php echo base_url(); ?>assigndomain" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="panel">
              <div class="panel-header bg-green">
                <h3>Assign Domain To User</h3>
              </div>
              <div class="panel-content">
                <div class="form-group">
                  <select id="user" name="user" class="form-control" data-search="true">
                    <option value="">Select user to assign domain</option>
                    <?php foreach($subusers as $subuser): ?>
                      <option value="<?php echo $subuser['id']; ?>" <?php if($subuserid == $subuser['id'])echo 'selected="selected"'; ?>><?php echo $subuser['email'];  ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <a class="btn btn-success " href="javascript:void(0);" onclick="checkall()">Check all</a> 
                  <a class="btn btn-warning " href="javascript:void(0);" onclick="uncheckall()">Uncheck all</a>
                </div>
              </div>
              <div class="row">
                <?php foreach($domains as $domain): ?>
                  <?php if(in_array($domain['domain_id'], $subuserdomains)): ?> 
                    <div class="col-md-6 col-sm-6 col-xs-12" >
                      <input type="checkbox" id="domain_<?php echo $domain['domain_id'];?>" name="domain[]" value="<?php echo $domain['domain_id'] ?>" checked="checked"  class="checkbox_select cs1">
                      <label for="domain_<?php echo $domain['domain_id']; ?>"><?php echo $domain['domain_name']; ?></label>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="panel">
              <div class="panel-header bg-green">
                <h3>Assign Domain To Group</h3>
              </div>
              <div class="panel-content">
                <div class="form-group">
                  <select id="group" name="group" class="form-control" data-search="true">
                    <option value="">Select group to assign domain</option>
                    <?php foreach($groups as $group): ?>
                      <option value="<?php echo $group['id']; ?>" <?php if($groupid == $group['id'])echo 'selected="selected"'; ?>><?php echo $group['group_name'];  ?></option>
                    <?php endforeach; ?>
                  </select>  
                </div>
                <div class="form-group">
                   <a class="btn btn-success " href="javascript:void(0);" onclick="checkallgroup()">Check all</a> 
                   <a class="btn btn-warning " href="javascript:void(0);" onclick="uncheckallgroup()">Uncheck all</a>
                </div>
              </div>      
              <div class="row">
                <?php foreach($domains as $domain): ?>
                  <?php if(in_array($domain['domain_id'], $groupdomains)): ?> 
                    <div class="col-md-12 col-sm-12 col-xs-12" >
                      <input type="checkbox" id="domain_<?php echo $domain['domain_id'];?>" name="domain[]" value="<?php echo $domain['domain_id'] ?>" checked="checked"  class="checkbox_select cs3">
                      <label for="domain_<?php echo $domain['domain_id']; ?>"><?php echo $domain['domain_name']; ?></label>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-header bg-green">
                <h3>Your domains</h3>
              </div>
              <div class="panel-content">
                <div class="row">
                  <?php foreach($domains as $domain): 

                    if($subuserdomains){
                      $checkdomains = $subuserdomains;
                    }else if($groupdomains){
                      $checkdomains = $groupdomains; 
                    }else{
                      $checkdomains = array();
                    }
                  ?>
                  <?php if(!in_array($domain['domain_id'], $checkdomains)): ?> 
                  <div class="col-md-4 col-sm-6 col-xs-12" >
                    <input type="checkbox" id="domain_<?php echo $domain['domain_id'];?>" name="domain[]" value="<?php echo $domain['domain_id'] ?>"  class="checkbox_select cs2">
                    <label for="domain_<?php echo $domain['domain_id']; ?>"><?php echo $domain['domain_name']; ?></label>
                  </div>
                  <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="panel-footer"> 
                <input type="submit" name="" class="btn btn-success" value="Assign Domain">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>


<?php $this->load->view(get_template_directory().'footer_new'); ?>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('#user').change(function(){
      if($(this).val() != ''){
        window.location.href = '<?php echo base_url(); ?>assigndomain/'+$(this).val();
      } 
    })

    $('#group').change(function(){
      if($(this).val() != ''){
        window.location.href = '<?php echo base_url(); ?>assigndomain/0/'+$(this).val();
      } 
    })
  });
  function checkall()
  {
    $('.cs1').iCheck('check');
    $('.cs2').iCheck('check');
  }
  function uncheckall()
  {
    $('.cs1').iCheck('uncheck');
    $('.cs2').iCheck('uncheck');
  }

  function checkallgroup()
  {
    $('.cs2').iCheck('check');
    $('.cs3').iCheck('check');
  }
  function uncheckallgroup()
  {
    $('.cs2').iCheck('uncheck');
    $('.cs3').iCheck('uncheck');
  }
</script>
