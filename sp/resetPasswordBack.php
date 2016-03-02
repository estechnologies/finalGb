<?php

	require 'connect.php';
	
	$database = new connect();
	
	$id = htmlspecialchars($_POST['id']);
	$email = htmlspecialchars($_POST['email']);
	$oldPass = htmlspecialchars($_POST['oldPassword']);
	$password1 = htmlspecialchars($_POST['password1']);
	$password2 = htmlspecialchars($_POST['password2']);
	
	
	$query = "SELECT * FROM service_providers WHERE service_id='$id'";
	
	$resultQuery = mysql_query($query);
	
	if(mysql_num_rows($resultQuery) != 0){
		
		$row = mysql_fetch_array($resultQuery);
		
		/*
		 * checking email
		 */
		
		if($email == $row['email_id']){
			
			$oldPass = md5($oldPass);
			
			if($oldPass == $row['service_password']){
				
				if($password1 == $password2){
					$password1 = md5($password1);
					
					$updateQuery = "UPDATE service_providers SET service_password='$password1'";
					$updateResultQuery = mysql_query($updateQuery);
					
					/*
					 * update results 
					 */
					if($updateResultQuery == 1){
						header("Location:resetpassword.php?msg1=“Password Reset has been Successful. <a href='logistics_logout.php' >Click here</a>to Login with New Password");
					}else{
						header("Location:resetpassword.php?msg=  Password update failed try  again");
					}
					
					
				}else{
					header("Location:resetpassword.php?msg=Password and Confirm Password must  be same");
				}
				
				
			}else{
				header("Location:resetpassword.php?msg=Current password is not correct");
			}
			
			
			
		}else{
			header("Location:resetpassword.php?msg=Email not correct");
		}
		
		
	}else{
		header("Location:resetpassword.php?msg=Account not found");
	}
	
?>