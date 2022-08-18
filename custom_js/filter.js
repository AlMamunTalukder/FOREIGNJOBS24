var job_filter_variables = {
	category_filter: '',
	country: '',
	city: '',
	job_type: '',
	name: '',
	user_height: '',
	user_weight: '',
	ethnicity: '',
	eye_color: '',
	chest: '',
	waist: '',
	hair_length: '',
	hair_color: '',
	page: 1,
	ajax_request: 0
};
function search_advance() {
	$("#loading").show();
	job_filter_variables.category_filter     = $('#category_filter').val();
	job_filter_variables.country     = $('#country').val();
	job_filter_variables.city     = $('#city').val();
	job_filter_variables.job_type     = $('#job_type').val();
	
	$.ajax({
			   url: 'filter_result.php',
			   data: {
				   category_filter: job_filter_variables.category_filter,
				   country: job_filter_variables.country,
				   city: job_filter_variables.city,
				   job_type: job_filter_variables.job_type,
				   
				   page: job_filter_variables.page
			   },
			   type: 'post',
			   success: function (output) {
				   job_filter_variables.page = 1;
				   $("#search_clear").show();
				   $("#loading").hide();
				   $('#filter_result').html(output);
				   //city_show();
			   }
		   });
}

function city_show() {
	
	job_filter_variables.country     = $('#country').val();
	
	$.ajax({
			   url: 'city_show.php',
			   data: {
				 
				   country: job_filter_variables.country
				  
			   },
			   type: 'post',
			   
			   success: function (output) {
				 
				   $('#city_show').html(output);
			   }
		   });
}
