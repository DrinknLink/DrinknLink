function getPar(par){
	//获取当前URL
	var local_url = document.location.href;	
	//获取要取得的get参数位置
	var get = local_url.indexOf(par +"=");
	if(get == -1){
		return null;	
	}	
	//截取字符串
	var get_par = local_url.slice(par.length + get + 1);	
	//判断截取后的字符串是否还有其他get参数
	var nextPar = get_par.indexOf("&");
	if(nextPar != -1){
		get_par = get_par.slice(0, nextPar);
	}
	return get_par;
}
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

var _login = function(){
	var url = window.location.href;
	var strs = new Array();
	strs=url.split("drinknlink.com");
	url = strs[0]+'drinknlink.com/DNL_yuchen/main/login';
	var data = {'email':$('#login-modal-email').val(),'password':$('#login-modal-password').val(),'req_url':getPar('req_url')};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  var strs = new Array();
			  var url = window.location.href;
			  strs=url.split("drinknlink.com");
			  window.location.href = strs[0]+'drinknlink.com/DNL_yuchen/'+json.req_url;
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
	strs=url.split("drinknlink.com");
	url = strs[0]+'drinknlink.com/DNL_yuchen/registerUser/register';
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