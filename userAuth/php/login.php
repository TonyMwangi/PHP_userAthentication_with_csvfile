<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];     //finish this line
    $password = $_POST['password'];   //finish this

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    $fileUserName = "";
    $fileUserEmail = "";
    $fileUserPassword = "";

    $fileName = '../storage/users.csv';
    $handle = fopen($fileName, "r");
    while (!feof($handle)) {
    	$fileUserName = fgets($handle);
    	$fileUserEmail = fgets($handle);
    	$fileUserPassword = fgets($handle);
    }
    fclose($handle);
    if($password == $fileUserPassword){
    	session_start();
    	$_SESSION["username"] = "$fileUserName";
    	header("Location: ../dashboard.php");
 
    }
    else{
    header("Location: ../html/login.html");
    die();
    }
}
?>

