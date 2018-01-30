
function on_click_delete_project()
    {
        if(confirm('Are you sure you want to delete this project?')){
            return true;
        }else{
            return false;
        }
    }

function validate_edit_serp_reporting_project_form()
{
    var error = false;
    if($('#project_name').val() == ''){   
        alert('Please enter project name');
        error = true;
        return false;
    }else if($('#project_description').val() == ''){
        alert('Please enter project description');
        error = true;
        return false;
    } else if($('#client_name').val() == '') {
        alert('Please enter client name');
        error = true;
        return false;
    }
    if(error == false) {
        return true;
    } 
}     

function add_task_notes(task_log_id)
	{
		if($('#more_notes').val() == ''){
			alert('Please add a notes');
			return false;
		}else {
			$.post('/seoreporting/reporting/updatetaskstatus',{'type':'updatenotes',
			 'added_notes':$('#more_notes').val(), 'task_log_id':task_log_id},function(data){
				if(data.status) {
					alert('Job updated successfully');
					window.location.reload();
				}
			},'json')	
		}		
	}

	function add_complete_task(e, task_log_id)
	{
		if($(e).is(':checked')) {
			$.post('/seoreporting/reporting/updatetaskstatus',{'type':'updatestatus', 'status':1, 'task_log_id':task_log_id},function(data){
				if(data.status) {
					alert('Job status changed successfully');
					window.location.reload();
				}
			},'json')	
		}else {
			$.post('/seoreporting/reporting/updatetaskstatus',{'type':'updatestatus', 'status':0, 'task_log_id':task_log_id},function(data){
				if(data.status) {
					alert('Job status changed successfully');
					window.location.reload();
				}
			},'json')	
		}
	}

	function on_click_delete_task()
    {
        if(confirm('Are you sure you want to delete this job?')){
            return true;
        }else{
            return false;
        }
    }

    function getTaskDetail(taskid)
    {
        $.get('/seoreporting/'+taskid+'/viewtask',function(data){
            $('#load_view_task').html(data);
        },'html')    
    }

    function changeRecurringStatus(e, taskid)
    {
        $.post('/seoreporting/reporting/updatetaskstatus',{'type':'updaterecurring', 'recurring':$(e).val(), 'taskid':taskid},function(data){
                if(data.status) {
                    alert('Job status changed successfully');
                    window.location.reload();
                }
            },'json')   
    }
    function validate_add_serp_reporting_project_form()
    {
        var error = false;
        if($('#project_name').val() == ''){   
            error = true;
            return false;
        }else if($('#project_description').val() == ''){
            error = true;
            return false;
        } else if($('#client_name').val() == '') {
            error = true;
            return false;
        }
        if(error == false) {
            return true;
        } 

    }
    function validate_add_serp_reporting_task()
    {
        var error = false;
        if($('#project').val() == '') {
            alert('Please choose a project');
            error = true;
            return false;
            
        }else if($('#task_name').val() == ''){   
            alert('Please enter a task name');
            error = true;
            return false;
            
        }else if($('#cost').val() == '') {
            error = true;
            alert("Please enter cost");
            return false;
        }
        if(error == false) {
            return true;
        } 

    }  
