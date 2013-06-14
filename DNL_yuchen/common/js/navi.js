$(function(){
	url = '/DNL_yuchen/main/getNaviBar';
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