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

       //create the query to be passed
       $query = "SELECT Username FROM Accounts";
       $result = mysqli_query($conn, $query);

       //determine if they exist
       if (mysqli_num_rows($result) > 0){
	   // determine the user
	   while($row = mysqli_fetch_assoc($result)) {
	   	      if ($row["Username"] == $_POST["inputUsername"]{
		      	 //check that they entered their password correctly
		      	 if ($row["Password"] == $_POST["inputPassword"]{
		      	    require('query.php');
			    }
			 }
	   }
	}

	require('loginFail.php');
?>