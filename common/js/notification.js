$("#accept").click(function(){
	var notifiID = $(this).attr('data');
	url = base_url+'/Yuchen/friend/confirmRequest';
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: {
			  'notifiID': notifiID
		  },
		  success: function(json){
			  alert('accept success');
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
});

$("#ignore").click(function(){
	var notifiID = $(this).attr('data');
	url = base_url+'/Yuchen/friend/ignoreRequest';
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: {
			  'notifiID': notifiID
		  },
		  success: function(json){
			  alert('ignore success');
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
});