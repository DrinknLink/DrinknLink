$(function(){
});

var _addFriend = function(current_uid,target_uid){
	url = base_url+'/request/friend/add';
	var data = {'User_ID_A':current_uid,'User_ID_B':target_uid,'req_url':getPar('req_url')};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  if(json.code=='100000'){
				  alert(json.msg);
			  }else if(json.code=='100001'){
				  alert(json.msg)
			  }
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
};

var _confirm = function(){
	url = base_url+'/request/friend/confirm';
	var data = {'email':$('#login-modal-email').val(),'password':$('#login-modal-password').val(),'req_url':getPar('req_url')};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  if(json.code=='100000'){
				  window.location.href = json.req_url;
			  }else if(json.code=='100001'){
				  alert(json.msg)
			  }else if(json.code=='100002'){
				  alert(json.msg)
			  }
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
};

var _delete = function(){
	url = base_url+'/request/friend/delete';
	var data = {'email':$('#login-modal-email').val(),'password':$('#login-modal-password').val(),'req_url':getPar('req_url')};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  if(json.code=='100000'){
				  window.location.href = json.req_url;
			  }else if(json.code=='100001'){
				  alert(json.msg)
			  }else if(json.code=='100002'){
				  alert(json.msg)
			  }
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
};

var _block = function(){
	url = base_url+'/request/friend/block';
	var data = {'email':$('#login-modal-email').val(),'password':$('#login-modal-password').val(),'req_url':getPar('req_url')};
	$.ajax({
		  type: 'POST',
		  url: url,
		  data: data,
		  success: function(json){
			  if(json.code=='100000'){
				  window.location.href = json.req_url;
			  }else if(json.code=='100001'){
				  alert(json.msg)
			  }else if(json.code=='100002'){
				  alert(json.msg)
			  }
		  },
		  error: function(){
			  alert('error');
		  },
		  dataType: 'json'
		});
};