<?php
session_start();
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
if(isset($_SESSION) || session_status() == PHP_SESSION_ACTIVE){
   session_unset();
   session_destroy();
   header("Location: ../html/login.html");
}
else{
	echo "no session is started";
}
}
logout();
?>
