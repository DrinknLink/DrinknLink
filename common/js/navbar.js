	/**
     * 
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 23-07-13
     *
     */
	$(function(){
//		$("#notification").popover({trigger:'click',placement:'bottom',html:true,content:'<a href="dsafsd">sadf</a>'});
		$("#notification").click(function(){
			if($("#notification-popover").attr('class') == 'popover fade bottom'){
				$("#notification-popover").attr('class','popover fade bottom in');
			}else if($("#notification-popover").attr('class') == 'popover fade bottom in'){
				$("#notification-popover").attr('class','popover fade bottom');
			}
		});
		
		url = base_url+'/Yuchen/notification/getNotification';
		$.ajax({
			  type: 'POST',
			  url: url,
			  data: '',
			  success: function(json){
				  $("#notification-popover").html(json.html);
			  },
			  error: function(){
//				  alert('error');
			  },
			  dataType: 'json'
			});
	});
	/**
	 * switch logo
	 */
	$(window).scroll(function() {
		switchLogo();
	  });
	
	var switchLogo = function(){
		var scrollTop = $(this).scrollTop();
	    if(scrollTop>=245){
	    	$("#navbar-logo").css('height','24px');
	    	$("#dnl-logo").attr('src','common/img/DnL-logo-02.png');
	    	$("#dnl-logo").css('height','25px');
	    	$("#handleBar").css('position','fixed');
	    	$("#toBeFixed-span12").css('position','fixed');
	    }else{
	    	$("#navbar-logo").css('height','80px');
	    	$("#dnl-logo").attr('src','common/img/dnl.png');
	    	$("#dnl-logo").css('height','80px');
	    	$("#handleBar").css('position','static');
	    	$("#toBeFixed-span12").css('position','static');
	    }
	};
	
	switchLogo();
	
	/**
	 * account
	 */
    $("#connectFB,#connectFB_register").click(function(){
    	FB.getLoginStatus(function(response){
    		if(response.status === 'connected'){
    			connection_fb(response.authResponse.userID);
    		}else if (response.status === 'not_authorized'){
    	    	 FB.login(function(response){
    	    		   if(response.authResponse){
    	    			   connection_fb(response.authResponse.userID);
    	    		   }else {
    	    		     console.log('User cancelled login or did not fully authorize.');
    	    		   }
    	    		 });
    	    }else{
    	    	 FB.login(function(response){
    	    		   if(response.authResponse){
    	    			   connection_fb(response.authResponse.userID);
    	    		   }else{
    	    		     console.log('User cancelled login or did not fully authorize.');
    	    		   }
    	    		 });
    	    }
    	});
    });

    var connection_fb = function(userID){
    	console.log('Welcome!  Fetching your information.... ');
    	FB.api('/me', function(response) {
        	url = 'account/connection_fb';
        	var data = {
//        			'firstName':response.first_name,
//        			'lastName':response.last_name,
        			'name':response.name,
        			'fbID':response.id,
        			'req_url':window.location.href
        		};
        	$.ajax({
					  type: 'POST',
					  url: url,
					  data: data,
					  success: function(json){
						  alert('fb login success');
						  refreshNavBar();
					  },
					  error: function(){
						  alert('error');
					  },
					  dataType: 'json'
      		});
    	});
    	
    };
    
	/**
     * tw login
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 01-08-13
     *
     */
    $("#connectTW,#connectTW_register").click(function(){
    	url = 'account/connection_tw';
    	var data = {
    		'req_url':window.location.href
    	};
    	$.ajax({
    		  type: 'POST',
    		  url: url,
    		  data: data,
    		  success: function(json){
    			  alert('tw login success');
    			  refreshNavBar();
    		  },
    		  error: function(){
    			  alert('error');
    		  },
    		  dataType: 'json'
    		});
    });
    
    /**
     * Email Login
     *
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 23-07-13
     *
     */
    function _login(){
    	url = 'account/login';
    	var email = $('#login-email').val();
    	var password = $('#login-password').val();
    	if(!email&&!password){
	    	email = $('#owner-email').val();
	    	password = $('#owner-password').val();
    	}
    	
    	var data = {
    			'email': email,
    			'password': password,
    			'req_url':window.location.href
    		};
    	$.ajax({
    		  type: 'POST',
    		  url: url,
    		  data: data,
    		  success: function(json){
    			  if(json.code == '100003'){
    				  window.location.href = base_url+'/admin';
    			  }else if(json.code == '100004'){
    				  alert('email login success');
        			  $("#emailLogin").modal('hide');
        			  refreshNavBar();
    			  }
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
    $("#logout").click(function(){
    	url = 'account/logout';
    	var data = {
    		'req_url':window.location.href
    	};
    	$.ajax({
    		  type: 'POST',
    		  url: url,
    		  data: data,
    		  success: function(json){
    			  var ourl = window.location.href;
    			  if(ourl.indexOf('drinknlink.com/admin')){
    				  window.location.href = base_url + '/registerOwner';
    			  }else{
    				  alert(json.msg);
        			  refreshNavBar();  
    			  }
    		  },
    		  error: function(){
    			  alert('error');
    		  },
    		  dataType: 'json'
    		});
    });
    
    /**
     * 
     * @return	json
     * @author	Yuchen Liang
     * @version 1.0 23-07-13
     *
     */
  var refreshNavBar = function(){
		url = base_url+'/main/getNavBar';
		$.ajax({
			  type: 'POST',
			  url: url,
			  data: '',
			  success: function(json){
				  $("#navbar").remove();
				  $("#emailLogin").remove();
				  $("body").prepend(json.html);
			  },
			  error: function(){
				  alert('error');
			  },
			  dataType: 'json'
			});
	};
	
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