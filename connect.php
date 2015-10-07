<?php
$con=mysqli_connect ("localhost","root","","vtu");
if (mysqli_connect_errno()) {
echo "failed to connect mysql: ". mysqli_connect_error();
}
// site URL and facebook credentials
define("APP_ID", "your app id");
define("APP_SECRET", "your app secret");
/* make sure the url end with a trailing slash */
define("SITE_URL", "http://demos.thesoftwareguy.in/login-system-with-facebook/");
/* the page where you will be redirected after login */
define("REDIRECT_URL", SITE_URL."facebook_login.php");
/* Email permission for fetching emails. */
define("PERMISSIONS", "email");
 
// create a facebook object
//$facebook = new Facebook(array('appId' => APP_ID, 'secret' => APP_SECRET));
//$userID = $facebook->getUser();
 

?>
