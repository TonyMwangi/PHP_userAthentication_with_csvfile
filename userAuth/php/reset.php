<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];   //complete this;
    $newpassword = $_POST['password'];       //complete this;

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    //open file and check if the email exist inside
    //if it does, replace the password
    $fileName = '../storage/users.csv';
    $handle = fopen($fileName, 'r');
	 while (($buffer = fgets($handle)) !== false) {
	    if (strpos($buffer, $email) !== false) {
		    	fclose($handle);
		    	$line = 3;
		        function file_edit_contents($fileName, $line, $newpassword){
		           $file = explode("\n", rtrim(file_get_contents($fileName)));
		           $file[$line] = $newpassword;
			       $file = implode("\n", $file);
		  		   file_put_contents($fileName, $file);
	            } 
	    }
	    else{
	    	echo "User does not exist";
	        
	    }    
     } 
}
?>


