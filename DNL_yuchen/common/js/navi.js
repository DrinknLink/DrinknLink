$(function(){
	//add navibar
	var url = window.location.href;
	var strs = new Array();
	strs=url.split("/main");
	url = strs[0]+'/main/getNaviBar';
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: '',
		  success: function(json){
//			  console.log(json.html);
			  $("body").prepend(json.html);
//			  $('.dropdown-toggle').dropdown();
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});

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

var _login = function(){
	var url = window.location.href;
	var strs = new Array();
	strs=url.split("/main");
	url = strs[0]+'/main/login';
	var data = {'email':$('#login-modal-email').val(),'password':$('#login-modal-password').val()};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  alert(json.msg);
//			  modal_hide();
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
};

var _register = function(){
	var url = window.location.href;
	var strs = new Array();
	strs=url.split("/main");
	url = strs[0]+'/registerUser/register';
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