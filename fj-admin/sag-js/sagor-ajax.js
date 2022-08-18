
function job_rec_ac_in(id, table_name, sta)
{	


	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="job_rec_status.php?id="+id+"&table_name="+table_name+"&sta="+sta; 
    	var browser=navigator.appName;
		if (browser=="Microsoft Internet Explorer")
		{
			xmlRequest.open("POST",url, true);
		}
		else
		{
			xmlRequest.open("GET",url, true);
		}
		
		xmlRequest.setRequestHeader("Content-Type", "application/x-www-formurlencoded");
		xmlRequest.onreadystatechange =function()
		{
			if(xmlRequest.readyState==4)
			{
				HandleAjaxResponse_job_rec_ac_in(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false; 
} 
function HandleAjaxResponse_job_rec_ac_in(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	//alert(xmlT);
	location.reload(); 
	return false;
}


// CAPITAL HOLDER LIST VIEW
function member_search_name(search_field) // Load Student academic information
{	
	
	var search_field_name = document.getElementById("search_field_name").value;
	
	$("#loading").show();
	if(search_field_name == "")
	{
	//alert(search_name);
	$("#loading").hide();
	$("#searh_clear").show();	
	location.reload(); 
	}	else	{
	
	//alert(search_field);
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
	return;
	
	var url = "member_search_name.php?search_field_name="+search_field_name;
	
	var browser=navigator.appName;
if (browser=="Microsoft Internet Explorer")
	{
		xmlRequest.open("POST",url, true);
	}
else
	{
		xmlRequest.open("GET",url, true);
	}
xmlRequest.setRequestHeader("Content-Type", "application/x-www-formurlencoded");
xmlRequest.onreadystatechange =function()
	{
		if(xmlRequest.readyState==4)
			{							
				HandleAjaxResponse_member_search_name(xmlRequest);
			}
	};
xmlRequest.send(null);			
return false;
}
}

function HandleAjaxResponse_member_search_name(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("member_search").innerHTML=xmlT;	
	$("#loading").hide();	
	$("#searh_clear").show();	
return false;
}




// CAPITAL HOLDER LIST VIEW
function member_search(search_field) // Load Student academic information
{	
	
	var search_field = document.getElementById("search_field").value;
	
	$("#loading").show();
	if(search_field == "")
	{
	//alert(search_name);
	$("#loading").hide();
	$("#searh_clear").show();	
	location.reload(); 
	}	else	{
	
	//alert(search_field);
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
	return;
	
	var url = "member_search.php?search_field="+search_field;
	
	var browser=navigator.appName;
if (browser=="Microsoft Internet Explorer")
	{
		xmlRequest.open("POST",url, true);
	}
else
	{
		xmlRequest.open("GET",url, true);
	}
xmlRequest.setRequestHeader("Content-Type", "application/x-www-formurlencoded");
xmlRequest.onreadystatechange =function()
	{
		if(xmlRequest.readyState==4)
			{							
				HandleAjaxResponse_member_search(xmlRequest);
			}
	};
xmlRequest.send(null);			
return false;
}
}

function HandleAjaxResponse_member_search(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("member_search").innerHTML=xmlT;	
	$("#loading").hide();	
	$("#searh_clear").show();	
return false;
}


// CAPITAL HOLDER LIST VIEW
function sub_menu_show(main_id) // Load Student academic information
{	
	
	var main_id = document.getElementById("main_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
	return;
	
	var url = "sub_sub_menu_show.php?main_id="+main_id;
	
	var browser=navigator.appName;
if (browser=="Microsoft Internet Explorer")
	{
		xmlRequest.open("POST",url, true);
	}
else
	{
		xmlRequest.open("GET",url, true);
	}
xmlRequest.setRequestHeader("Content-Type", "application/x-www-formurlencoded");
xmlRequest.onreadystatechange =function()
	{
		if(xmlRequest.readyState==4)
			{							
				HandleAjaxResponse_sub_menu_show(xmlRequest);
			}
	};
xmlRequest.send(null);			
return false;
}

function HandleAjaxResponse_sub_menu_show(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_sub_menu").innerHTML=xmlT;		
return false;
}









// job_seeker_active start
function job_seeker_active(id)
{
	var x = confirm("Are you sure to active this ID ?");
	if(x)
	{
		job_seeker_active_ok(id);
	}
}


function job_seeker_active_ok(id) 
{	

	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="job_seeker_active_ok.php?id="+id; 
    	var browser=navigator.appName;
		if (browser=="Microsoft Internet Explorer")
		{
			xmlRequest.open("POST",url, true);
		}
		else
		{
			xmlRequest.open("GET",url, true);
		}
		
		xmlRequest.setRequestHeader("Content-Type", "application/x-www-formurlencoded");
		xmlRequest.onreadystatechange =function()
		{
			if(xmlRequest.readyState==4)
			{
				HandleAjaxResponse_job_seeker_active(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false; 
} 
function HandleAjaxResponse_job_seeker_active(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	//alert(xmlT);
	location.reload(); 
	return false;
}

// job_seeker_active end







// job_seeker_deactivate start
function job_seeker_deactivate(deactivate)
{
	var x = confirm("Are you sure to deactivate this ID ?");
	if(x)
	{
		job_seeker_deactivate_ok(deactivate);
	}
}


function job_seeker_deactivate_ok(deactivate) 
{	

	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="job_seeker_active_ok.php?deactivate="+deactivate; 
    	var browser=navigator.appName;
		if (browser=="Microsoft Internet Explorer")
		{
			xmlRequest.open("POST",url, true);
		}
		else
		{
			xmlRequest.open("GET",url, true);
		}
		
		xmlRequest.setRequestHeader("Content-Type", "application/x-www-formurlencoded");
		xmlRequest.onreadystatechange =function()
		{
			if(xmlRequest.readyState==4)
			{
				HandleAjaxResponse_job_seeker_deactivate(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false; 
} 
function HandleAjaxResponse_job_seeker_deactivate(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	//alert(xmlT);
	location.reload(); 
	return false;
}

// job_seeker_deactivate end















// ALL DELETE FUNCTION DELETE FUNCTION
function delete_function_con(id, table_name)
{
	var x = confirm("Are you sure to delete this Permanently ?");
	if(x)
	{
		all_delete_function(id, table_name);
	}
}


function all_delete_function(id, table_name) 
{	

	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="all_delete_function.php?id="+id+"&table_name="+table_name; 
    	var browser=navigator.appName;
		if (browser=="Microsoft Internet Explorer")
		{
			xmlRequest.open("POST",url, true);
		}
		else
		{
			xmlRequest.open("GET",url, true);
		}
		
		xmlRequest.setRequestHeader("Content-Type", "application/x-www-formurlencoded");
		xmlRequest.onreadystatechange =function()
		{
			if(xmlRequest.readyState==4)
			{
				HandleAjaxResponse_all_delete_function(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false; 
} 
function HandleAjaxResponse_all_delete_function(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	//alert(xmlT);
	location.reload(); 
	return false;
}



// OBJECT FUNCTION
function GetXmlHttpObject()
	{		
		var xmlHttp=null;
		try
		{
		   xmlHttp=new XMLHttpRequest();
		}
		catch (e)
		{
			// Internet Explorer
			try
				{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
			catch (e)
				{
					xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
				}
		}
		return xmlHttp;
	  
}