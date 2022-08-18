(function($) { 

	"use strict";
	
	/* ================ Revolution Slider. ================ */
	if($('.tp-banner').length > 0){
		$('.tp-banner').show().revolution({
			delay:6000,
	        startheight:550,
	        startwidth: 1170,
	        hideThumbs: 1000,
	        navigationType: 'none',
	        touchenabled: 'on',
	        onHoverStop: 'on',
	        navOffsetHorizontal: 0,
	        navOffsetVertical: 0,
	        dottedOverlay: 'none',
	        fullWidth: 'on'
		});
	}
	if($('.tp-banner-full').length > 0){
		$('.tp-banner-full').show().revolution({
			delay:6000,
	        hideThumbs: 1000,
	        navigationType: 'none',
	        touchenabled: 'on',
	        onHoverStop: 'on',
	        navOffsetHorizontal: 0,
	        navOffsetVertical: 0,
	        dottedOverlay: 'none',
	        fullScreen: 'on'
		});
	}
	


/* ================ testimonials ================ */
$(document).ready(function() { 
  	$(".owl-carousel").owlCarousel({ 
      
	   loop:true,
		margin:10,
		nav:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			700:{
				items:2,
				nav:false
			},
			1170:{
				items:2,
				nav:true,
				loop:false
			}
		}
	  
	  
  	}); 
	});






})(jQuery);



function dropdownFunction() {
    document.getElementById("userDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}










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
	
		var url="fj-admin/all_delete_function.php?id="+id+"&table_name="+table_name; 
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







$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="">Close</span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});




$(function()
{
    $(document).on('click', '.btn-add2', function(e)
    {
        e.preventDefault();

        var controlForm2 = $('.controls2:first'),
            currentEntry2 = $(this).parents('.entry2:first'),
            newEntry = $(currentEntry2.clone()).appendTo(controlForm2);

        newEntry.find('input').val('');
        controlForm2.find('.entry2:not(:last) .btn-add2')
            .removeClass('btn-add2').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="">Close</span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry2:first').remove();

		e.preventDefault();
		return false;
	});
});


$(function()
{
    $(document).on('click', '.btn-add3', function(e)
    {
        e.preventDefault();

        var controlForm3 = $('.controls3:first'),
            currentEntry3 = $(this).parents('.entry3:first'),
            newEntry = $(currentEntry3.clone()).appendTo(controlForm3);

        newEntry.find('input').val('');
        controlForm3.find('.entry3:not(:last) .btn-add3')
            .removeClass('btn-add3').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="">Close</span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry3:first').remove();

		e.preventDefault();
		return false;
	});
});

$(function()
{
    $(document).on('click', '.btn-add4', function(e)
    {
        e.preventDefault();

        var controlForm4 = $('.controls4:first'),
            currentEntry4 = $(this).parents('.entry4:first'),
            newEntry = $(currentEntry4.clone()).appendTo(controlForm4);

        newEntry.find('input').val('');
        controlForm4.find('.entry4:not(:last) .btn-add4')
            .removeClass('btn-add4').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="">Close</span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry4:first').remove();

		e.preventDefault();
		return false;
	});
});

$(function()
{
    $(document).on('click', '.btn-add5', function(e)
    {
        e.preventDefault();

        var controlForm5 = $('.controls5:first'),
            currentEntry5 = $(this).parents('.entry5:first'),
            newEntry = $(currentEntry5.clone()).appendTo(controlForm5);

        newEntry.find('input').val('');
        controlForm5.find('.entry5:not(:last) .btn-add5')
            .removeClass('btn-add5').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="">Close</span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry5:first').remove();

		e.preventDefault();
		return false;
	});
});

$(function()
{
    $(document).on('click', '.btn-add6', function(e)
    {
        e.preventDefault();

        var controlForm6 = $('.controls6:first'),
            currentEntry6 = $(this).parents('.entry6:first'),
            newEntry = $(currentEntry6.clone()).appendTo(controlForm6);

        newEntry.find('input').val('');
        controlForm6.find('.entry6:not(:last) .btn-add6')
            .removeClass('btn-add6').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="">Close</span>');
    }).on('click', '.btn-remove', function(e)
    {
      $(this).parents('.entry6:first').remove();

		e.preventDefault();
		return false;
	});
});