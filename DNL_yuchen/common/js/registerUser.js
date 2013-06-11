$(function(){
    $("#frm-register").validate({
    	rules: {
    	    email: {
    	    	required: true,
    	    	email: true,
    	    	remote: {
    	    		url: "registerUser/isEmailUsed",
    	    		type: "post",
    	    		data: {
    	    			email: function() {
    	    				return $("#reg-email").val();
    	    			}
    	    		}
    	    	}
    	    }
    	}
    });
});

function _register(){
	url = 'registerUser/register';
	var data = {'email':$('#reg-email').val(),'password':$('#reg-password').val()};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  alert('success');
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
}