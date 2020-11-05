<?php
/* Attempt Heroku Postgres connection 
	Assuming you are running Heroku Postgres add-on
	with default setting*/
	$link = pg_connect("host=ec2-34-234-228-127.compute-1.amazonaws.com 
	dbname=da1elld1tbreo6 port=5432 
	user=fkbxrzlfibwcuz 
	password=0445b45feb9e8a733c34a49b4df14da739767f25ddc4f401b45b69744093a68c 
	sslmode=require");
	 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect.");
	} else {
		echo "Connection to Heroku Postgres has been established";
	}
	
	$customername = $_REQUEST['customername'];
	$gender = $_REQUEST['gender'];
	$dob = $_REQUEST['dob'];

	// Attempt insert query execution
	$sql = "INSERT INTO customer(customer_name, gender, dob) VALUES ('$customername','$gender', '$dob')";
	
	if(pg_query($link, $sql)){
		echo "Records added successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql" . pg_error($link);
	}
	
	// Close connection
	pg_close($link);
?>