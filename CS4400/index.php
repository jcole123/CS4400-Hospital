<?php 
date_default_timezone_set('America/New_York');
include_once 'header.php';

echo "<br /><span class='main'>Welcome to Georgia Tech's Hospital,";

if ($loggedin) echo " $user, you are logged in.";
else           echo ' please sign up and/or log in to join in.';

?>

</span><br /><br /></body></html>
