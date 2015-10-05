$(document).on("click","#create-group", function(){
	var service_name = $("input[name='service_group_name']").val();

	if(service_name!='')
	{
		$.post('ajax',{service_name:service_name,action:'service-add'}, function(d){
			var resp = $.parseJSON(d);

			console.log(resp);
		});
	}
	else
	{
		alert("Please enter group name.");
	}

	
});