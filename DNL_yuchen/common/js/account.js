$(function(){
	url = '/DNL_yuchen/account/checkEmailUsed';
	$("#frm-register").validate({
    	rules: {
    		reg_email: {
    	    	required: true,
    	    	email: true,
    	    	remote: {
    	    		url : url,
    	    		type: "post",
    	    		data: {
    	    			email: function() {
    	    				return $("#reg-email").val();
    	    			}
    	    		}
    	    	}
    	    },
    	    reg_password: {
    	    	required: true
    	    }
    	}
    });
});

var _login = function(){
	url = '/DNL_yuchen/account/login';
	var data = {'email':$('#login-modal-email').val(),'password':$('#login-modal-password').val(),'req_url':getPar('req_url')};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  window.location.href = '/DNL_yuchen'+json.req_url;
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
};

var _logout = function(){
	url = '/DNL_yuchen/account/logout';
	var data = {};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  if(json.code=='100000'){
				  window.location.href = '/DNL_yuchen/login?from=logout';
			  }
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
}

var _register = function(){
	url = '/DNL_yuchen/account/register';
	var data = {'email':$('#reg-email').val(),'password':$('#reg-password').val()};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  if(json.code=='100000'){
				  window.location.href = '/DNL_yuchen'+json.req_url;
			  }
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
}