<div id="fb-root"></div>
<script src="https://connect.facebook.net/en_US/sdk.js"></script><script>
	FB.init({
	  appId   : 973203469700486,
	  status  : true,
	  xfbml   : true,
	  version : 'v2.9'
	});
	FB.AppEvents.logPageView();
	FB.login(function(response) {
	    if (response.authResponse) {
	     console.log('Welcome!  Fetching your information.... ');
	     FB.api('/me', function(response) {
	       console.log('Good to see you, ' + response.name + '.');
	     });
	    } else {
	     console.log('User cancelled login or did not fully authorize.');
	    }
	});
</script>
