$(function(){
	var strs = new Array();
	
	//add navibar
	var url = window.location.href;
	strs=url.split("drinknlink.com");
	url = strs[0]+'drinknlink.com/DNL_yuchen/main/getNaviBar';
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
});