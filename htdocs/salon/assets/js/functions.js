$(document).on("click","#create-group", function(){
	var service_name = $("input[name='service_group_name']").val(),
		container = $(document).find("#service-container"),
		service_modal = $("#modal-add-service-group");

	if(service_name!='')
	{
		$.post('ajax',{service_name:service_name,action:'service-add'}, function(resp){
			container.prepend(resp);
			service_modal.modal('hide')
		});
	}
	else
	{
		alert("Please enter group name.");
	}

	
});


function set_group_salon(group_id, salon_id){
	var service_group_id = $(document).find("input[name='service_group_id']"),
		business_id = $(document).find("input[name='business_id']");
		
		service_group_id.val(group_id);
		
		business_id.val(salon_id);
		
		return;
}