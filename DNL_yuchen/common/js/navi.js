$(function(){
	url = 'main/getNaviBar';
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: '',
		  success: function(json){
//			  console.log(json.html);
			  $("body").prepend(json.html);
			  $('.dropdown-toggle').dropdown();
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
});