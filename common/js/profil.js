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
	
	
	$(window).scroll(function() {
		var scrollTop = $(this).scrollTop();
	    if(scrollTop>=245){
	    	$("#handleBar").css('position','fixed');
	    }else{
	    	$("#handleBar").css('position','static');
	    }
	    
	    if(scrollTop>=246){
	    	$("#toBeFixed-span12").css('position','fixed');
	    }else{
	    	$("#toBeFixed-span12").css('position','static');
	    }
	    
	  });

	function initialize() {
	  var mapOptions = {
	    zoom: 15,
	    center: new google.maps.LatLng(52.08335,5.147850000000062),
	    disableDefaultUI: true,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	  };
	  map = new google.maps.Map(document.getElementById('cover-map'),
	      mapOptions);
	}

	google.maps.event.addDomListener(window, 'load', initialize);
	
	var getGeneral = function(){
		url = base_url+'/Yuchen'+'/bar/getGeneral';
		$.ajax({
			  type: 'POST',
			  url: url,
			  data: '',
			  success: function(json){
				  $("#content").html(json.html);
			  },
			  error: function(){
				  alert('error');
			  },
			  dataType: 'json'
			});
	};
	
	$("#friendConnection").click(function(){
		var friendStatus = $(this).attr('friendStatus');
		if(friendStatus == 0)
			url = base_url+'/Yuchen'+'/friend/sendRequest';
		else if(friendStatus == 1)
			return;
		else if(friendStatus == 2)
			return;
		
		$.ajax({
			  type: 'POST',
			  url: url,
			  data: {
				  'uid':$(this).attr('data'),
				 	},
			  success: function(json){
				  if(json.code='100000'){
					  if(friendStatus == 0){
					  	$("#friendConnection").html('Request sent');
					  	$("#friendConnection").attr('friendStatus',1);
					  }

				  }
			  },
			  error: function(){
				  alert('error');
			  },
			  dataType: 'json'
			});
	});
	
	getGeneral();
	
	$("#general").click(function(){
		getGeneral();
	});
});