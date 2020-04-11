<?php
use Testing\LinkedIn;
require_once "LinkedIn.php";
$app_id = "Your app's id";
$app_secret = "your app's secret code";
$redirect = "http://localhost/SUlinkedin/redirect.php"; //page to which user will be redirected after authentication

$scopes = "r_emailaddress r_liteprofile w_member_social"; //permissions to grant
$ssl = false;

$linkedin = new LinkedIn($app_id, $app_secret,$redirect,$scopes,$ssl);

?>