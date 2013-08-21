$(function(){
	url = base_url+'/main/getSocialBar';
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: '',
		  success: function(json){
			  $("#container").append(json.html);
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
	
});
