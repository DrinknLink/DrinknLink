$(function(){
	url = base_url+'/main/getNavBar';
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: {
			  'isAdmin': true
		  },
		  success: function(json){
			  $("body").prepend(json.html);
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
	
	
});