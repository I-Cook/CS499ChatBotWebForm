<?php
       //connect to accounts datadase
       $servername = "accounts.cpd50ukl3swz.us-east-2.rds.amazonaws.com";
       $username = "Icook";
       $password = "10994467";
       //<!-- create the connection -->
       $conn = new mysqli($servername, $username, $password);
       if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
       }
?>