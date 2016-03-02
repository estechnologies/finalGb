<?php 

	require 'connect.php';
	
	$database = new connect();
	
	
	$id = htmlspecialchars($_POST['id']);
	$serviceType  = htmlspecialchars($_POST['service_type']);
	$deliveryType = htmlspecialchars($_POST['Delivery_Type']);
	$serviceCode = htmlspecialchars($_POST['service_provider_code']);
	$spname = htmlspecialchars($_POST['service_provider_name']);
	$contactAddress = htmlspecialchars($_POST['Contact_address']);
	$contactPerson = htmlspecialchars($_POST['contact_person']);
	$email = htmlspecialchars($_POST['Email']);
	$mobile = htmlspecialchars($_POST['usrtel']);
	$baseLocation = htmlspecialchars($_POST['base_location']);
	$baselocationAddress = htmlspecialchars($_POST['base_location_address']);
	$baseLocationContactperson = htmlspecialchars($_POST['base_location_contact_person']);
	$baselocationEmailid = htmlspecialchars($_POST['base_location_email_id']);
	$baselocationContactnumber = htmlspecialchars($_POST['base_location_contact_number']);
	$basePrice = htmlspecialchars($_POST['base_price']);
	$freeKm = htmlspecialchars($_POST['free_km']);
	$freeKg = htmlspecialchars($_POST['free_kg']);
	$pricekm = htmlspecialchars($_POST['price_km']);
	$pricekg = htmlspecialchars($_POST['price_kg']);
	$username = htmlspecialchars($_POST['username']);
	$password1 = htmlspecialchars($_POST['password']);
	$password2 = htmlspecialchars($_POST['rpassword']);
	
	
	
	
	
	if($password1 == $password2){
		$password1 = md5($password1);
		
		
		$query = "UPDATE service_providers SET ";
		$query .= "service_username='$username',";
		$query .= "service_type='$serviceType',";
		$query .= "delivery_type='$deliveryType',";
		$query .= "service_provider_code='$serviceCode',";
		$query .= "service_provider_name='$spname',";
		$query .= "Contact_address='$contactAddress',";
		$query .= "contact_person='$contactPerson',";
		$query .= "contact_number='$mobile',";
		$query .= "email_id='$email',";
		$query .= "base_location='$baseLocation',";
		$query .= "base_location_address='$baselocationAddress',";
		$query .= "base_location_contact_person='$baseLocationContactperson',";
		$query .= "base_location_contact_number='$baselocationContactnumber',";
		$query .= "base_location_email_id='$baselocationEmailid',";
		$query .= "free_km='$freeKm',";		
		$query .= "free_kg='$freeKg',";
		$query .= "base_price='$basePrice',";
		$query .= "price_km='$pricekm',";
		$query .= "price_kg='$pricekg',";
		$query .= "service_password='$password1' WHERE service_id='$id'";
		
		$resultQuery = mysql_query($query);
		
		
		if($resultQuery == 1){
			header("Location:Admin_Service_Providers_Edit.php?id=$id&msg1=Service Provider information is updated successfully.");
		}else{
			header("Location:Admin_Service_Providers_Edit.php?id=$id&msg=Update Failed.please try again...");
		}
		
		
	}else{
		header("Location:Admin_Service_Providers_Edit.php?id=$id&msg=password & confirm password must be same");	
	}
	
	

?>