$(function(){
	url = base_url+'/main/getNavBar';
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: '',
		  success: function(json){
			  $("body").prepend(json.html);
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
	
	url = base_url+'/main/getSocialBar';
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: '',
		  success: function(json){
			  $("#main-content").append(json.html);
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
	
    /**
     * Form validation
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 22-07-13
     *
     */
	$.validator.addMethod("validCharacter",function(value,element,params){
			var reg=/^\w+$/;    
	        if(!reg.test(value)){   
	            return false;   
	        }else{   
	            return true;   
			}
		},"Contains invalid character"); 
	
    $("#frm-register").validate({
    	rules: {//name
    		name: {
    	    	required: true,
    	    	validCharacter: true
    	    },
    	    ownerEmail: {
    	    	required: true,
    	    	email: true,
    	    	remote: {
    	    		url: "account/isEmailUsed",
    	    		type: "post",
    	    		data: {
    	    			email: function() {
    	    				return $("#reg-email").val();
    	    			},
    	    			type: 0 //Owner
    	    		}
    	    	}
    	    },
    	    userEmail: {
    	    	required: true,
    	    	email: true,
    	    	remote: {
    	    		url: "account/isEmailUsed",
    	    		type: "post",
    	    		data: {
    	    			email: function() {
    	    				return $("#reg-email").val();
    	    			},
    	    			type: 1 //User
    	    		}
    	    	}
    	    },
    	    password : {
    	    	required: true,
    	    	rangelength: [6,14]
    	    },
    	    confirmPassword : {
    	    	required: true,
    	    	equalTo: "#reg-password"
    	    },
    	    barName : {
    	    	required: true,
    	    },
			address:{
				required: true,
			},
			postcode:{
				required: true,
			},
			city:{
				required: true,
			},
			telephone:{
				required: true,
			}
    	},
    	messages: {
    	}
    });
    
    /** NOT USE
     * 
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 31-07-13
     *
     */
    
    $("#tw_register").click(function(){
    	url = 'account/registerUserTW';
    	var data = {};
    	$.ajax({
    		  type: 'POST',
    		  url: url,
    		  data: data,
    		  success: function(json){
    			  window.location.href = json.authorize_url;
    		  },
    		  error: function(){
    			  alert('error');
    		  },
    		  dataType: 'json'
    		});
    });
});

/**
 * 
 *
 * @return	json
 * @author	Yuchen Liang
 * @version 1.0 23-07-13
 *
 */
function _registerUser(){
	url = 'account/registerUser';
	var data = {
			'name':$('#reg-name').val(),
			'email':$('#reg-email').val(),
			'password':$('#reg-password').val()
		};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  window.location.href = base_url+'/Yuchen'+'/home'; 
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
}

/**
 * 
 *
 * @return	json
 * @author	Yuchen Liang
 * @version 1.0 23-07-13
 *
 */
function _registerOwner(){
	url = 'account/registerOwner';
	var data = {
			//ownerInfo
			'ownerName':$('#reg-ownerName').val(),
			'email':$('#reg-email').val(),
			'password':$('#reg-password').val(),
			//first barInfo
			'barName':$('#reg-barName').val(),
			'address':$('#reg-address').val(),
			'postcode':$('#reg-postcode').val(),
			'city':$('#reg-city').val(),
			'kvkNumber':$('#reg-kvkNumber').val(),
			'phoneNumber':$('#reg-telephone').val()
		};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  window.location.href = base_url+'/admin';
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
}

/**
 * facebook apis initialize
 */
window.fbAsyncInit = function() {
	  FB.init({
	    appId      : '374269069346722', // App ID
	    channelUrl : 'localhost/DNL/channel', // Channel File
	    status     : true, // check login status
	    cookie     : true, // enable cookies to allow the server to access the session
	    xfbml      : true  // parse XFBML
	  });
};

// Load the SDK asynchronously
(function(d){
var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
if (d.getElementById(id)) {return;}
js = d.createElement('script'); js.id = id; js.async = true;
js.src = "//connect.facebook.net/en_US/all.js";
ref.parentNode.insertBefore(js, ref);
}(document));

// Here we run a very simple test of the Graph API after login is successful. 
// This testAPI() function is only called in those cases. 
function testAPI() {
console.log('Welcome!  Fetching your information.... ');
FB.api('/me', function(response) {
  console.log(JSON.stringify(response));
});
}
