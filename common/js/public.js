var base_url = "http://www.drinknlink.com";

//get
var getPar = function(par){
	var local_url = document.location.href;	
	var get = local_url.indexOf(par +"=");
	if(get == -1){
		return null;	
	}	
	var get_par = local_url.slice(par.length + get + 1);	
	var nextPar = get_par.indexOf("&");
	if(nextPar != -1){
		get_par = get_par.slice(0, nextPar);
	}
	return get_par;
};