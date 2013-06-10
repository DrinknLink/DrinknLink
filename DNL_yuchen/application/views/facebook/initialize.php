<div id="fb-root"></div>
<script>
	$(function() {
	  $.ajaxSetup({ cache: true });
	  $.getScript('//connect.facebook.net/en_UK/all.js', function(){
	    window.fbAsyncInit = function() {
	      FB.init({
	        appId: <?= FACEBOOK_APP_ID ?>,
	        channelUrl: <?php base_url().'facebook/channel'?>,
	      });       
	      $('#loginbutton,#feedbutton').removeAttr('disabled');
	      FB.getLoginStatus(updateStatusCallback);
	    };
	  });
	});
</script>