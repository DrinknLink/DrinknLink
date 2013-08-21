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
	
	var getGeneral = function(type){
		url = base_url+'/bar/getSideTab';
		$.ajax({
			  type: 'POST',
			  url: url,
			  data: {
				  'type': type
			  },
			  success: function(json){
				  $("#content").html(json.html);
			  },
			  error: function(){
				  alert('error');
			  },
			  dataType: 'json'
			});
	};
	
	$("#favourite").click(function(){
		var isFavourite = $(this).attr('isFavourite');
		if(isFavourite)
			url = base_url+'/bar/cancelFavourite';
		else
			url = base_url+'/bar/addFavourite';
		
		$.ajax({
			  type: 'POST',
			  url: url,
			  data: {'bid':$(this).attr('data')},
			  success: function(json){
				  if(json.code='100000'){
					  if(isFavourite){
						  $("#favourite").html('Add to Favourite');
						  $("#favourite").attr('isFavourite',null);						  
					  }else{
						  $("#favourite").html('My Favourite');
						  $("#favourite").attr('isFavourite',true);
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
	
	$(".side-tab").click(function(){
		getGeneral($(this).attr('data'));
	});
});