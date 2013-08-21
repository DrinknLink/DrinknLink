$(function(){
	url = base_url+'/main/getLanguageBar';
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


var initial = function(){
	
};

var languageSwitch = function(lang){
	var url = window.location.href;
	if(url.indexOf(base_url+'/nl')>=0){
		window.location.href = url.replace(base_url+'/nl',base_url+'/'+lang);
	}else if(url.indexOf(base_url+'/en')>=0){
		window.location.href = url.replace(base_url+'/en',base_url+'/'+lang);
	}else{
		window.location.href = url.replace(base_url,base_url+'/'+lang);
	}
};