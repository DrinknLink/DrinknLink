$(function(){
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
});