<?php
require_once "init.php";
$accestoken = $linkedin->getAccessToken($_GET['code']);//getting access token
$person = $linkedin->getPerson();//returns php object
$emailObj = $linkedin ->getEmail();
$Firstname = $person->localizedFirstName;
$lastname = $person->localizedLastName;
echo "name : ".$Firstname." ".$lastname;
echo "<br>email : ".$emailObj->elements[0]->{'handle~'}->emailAddress."<br>";
echo "<img src=".var_export($person->profilePicture->{"displayImage~"}->elements[0]->identifiers[0]->identifier,true)."<img>"; //for email
// echo "<pre>".var_export($person,true)."<pre>";
?>