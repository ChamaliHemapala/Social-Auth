<!DOCTYPE HTML>

<?php
	session_start();
	
	$username = "user";
	$password = "password";
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		header("Location: success.php");
	}
	if (isset($_POST['username']) && isset($_POST['password']))
		{
		if ($_POST['username'] == $username && $_POST['password'] == $password)
		{
		$_SESSION['loggedin'] = true;
		header("Location: success.php");
		}
		}
?>

<html>
<title>
let's get connected
</title>

<head>
<script>
    FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});


{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        signedRequest:'...',
        userID:'...'
    }
}


</script>
</head>


<body>
	<form method="post" action="letsGetConnectedLogin.php">
		Username:<br/>
		<input type="text" name="username"><br/>
		Password:<br/>
		<input type="password" name="password"><br/><br/>
		<input type="submit" value="Login!"> <button type="button">Sign Up!</button>
	</form>
<br/><br/>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=236951346867531&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true"></div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '236951346867531',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.12'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

</body>
</html>