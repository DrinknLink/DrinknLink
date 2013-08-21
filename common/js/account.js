$(function(){
	url = base_url+'/account/checkEmailUsed';
	$("#frm-register").validate({
    	rules: {
    		reg_email: {
    	    	required: true,
    	    	email: true,
    	    	remote: {
    	    		url : url,
    	    		type: "post",
    	    		data: {
    	    			UserEmail: function() {
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
	url = base_url+'/account/login';
	var data = {'UserEmail':$('#login-modal-email').val(),'UserPassword':$('#login-modal-password').val(),'req_url':getPar('req_url')};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  if(json.code=='100000'){
				  window.location.href = json.req_url;
			  }else if(json.code=='100001'){
				  alert(json.msg);
			  }else if(json.code=='100002'){
				  alert(json.msg);
			  }
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
};

var _logout = function(){
	url = base_url+'/account/logout';
	var data = {};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  if(json.code=='100000'){
				  window.location.href = base_url+'/login?from=logout';
			  }
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
};

var _register = function(){
	url = base_url+'/account/register';
	var data = {'UserEmail':$('#reg-email').val(),'UserPassword':$('#reg-password').val(),'req_url':getPar('req_url')};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  if(json.code=='100000'){
				  window.location.href = json.req_url;
			  }
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
};