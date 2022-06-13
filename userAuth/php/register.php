<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $fileName = '../storage/users.csv';
    $handle = fopen($fileName, "a");
    fwrite($handle, "$username\n$email\n$password");
    fclose($handle);
    
    // echo "OKAY";
    if(file_exists($fileName)){
       echo "User Successfully registered";
    }
    //echo handle this page
    else{
    	echo " Data storage is unsuccessful";
    }
}
?>


