<?php defined('BASEPATH') OR exit('No direct script access allowed'); $this->load->view(get_template_directory().'header');
?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-header bg-green">
                    <h3>List of Group <a href="<?php echo base_url(); ?>addgroups"><button class="btn btn-sm btn-rounded btn-success pull-right">Add group</button></a></h3>
                </div>
                <div class="panel-content pagination2">
                    <table class="table table-hover table-dynamic ds-list-table">
                        <thead>
                            <tr>
                                <th>Group Id</th>
                                <th>Group name</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if($groups):
                            foreach($groups as $group): ?>
                            <tr>
                                <td><?php echo $group['id']; ?></td>
                                <td><?php echo $group['group_name']; ?></td>
                                <td><?php echo date('d M Y H:i',strtotime($group['created'])); ?></td>
                                <td>
                                    <a href="<?php echo site_url(); ?>editgroups/<?php echo $group['id']; ?>" title="Edit Group" class="btn btn-sm btn-rounded btn-blue"><i class="icon-pencil"></i></a>
                                    <a href="<?php echo site_url(); ?>deletegroups/<?php echo $group['id']; ?>" title="Delete Group" class="btn btn-sm btn-rounded btn-danger"  onclick="return confirmdelete();"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                                <?php endforeach;
                                    else:
                                ?>  
                           	<tr>
                                <td></td>
                                <td></td>
                                <td></td>
                           		<td></td>
                           	</tr>
                       	    <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view(get_template_directory().'footer_new'); ?>
<script type="text/javascript">
	function confirmdelete()
	{
		if(confirm('Are you sure you want to delete this group?')){
			return true;
		}else{
			return false;
		}
	}
</script>