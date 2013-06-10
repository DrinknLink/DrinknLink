var _login = function(){
	url = 'main/login';
	var data = {'email':$('#login-modal-email').val(),'password':$('#login-modal-password').val()};
	console.log(data);
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
//			  alert(json.msg);
//			  modal_hide();
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
};