<?php
       //connect to accounts datadase
       $servername = "accounts.co56k4thcnpi.us-east-1.rds.amazonaws.com";
       $username = "Icook";
       $password = "10994467";
       $port = "accounts";
       echo "Initializing";
       //<!-- create the connection -->
       $conn = new mysqli($servername, $username, $password, $port);
       echo "Connection done";
       if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
	echo "Fail Connect.";
       }

       //create the query to be passed
       $user = $_POST['inputUsername'];
       $pass = $_POST['inputPassword'];
       $query = "SELECT Username FROM Accounts WHERE Username='$uname'";
       $result = mysqli_query($conn, $query);

       //determine if they exist
       if (mysqli_num_rows($result) > 0){
	   // determine the user
	   while($row = mysqli_fetch_assoc($result)) {
	   	      if ($row["Username"] == $_POST["inputUsername"]){
		      	 //check that they entered their password correctly
		      	 if ($row["Password"] == $_POST["inputPassword"]){
		      	    require('Login/query.html');
			    }
			 }
	   }
	}

	require('Login/loginFail.php');
?>
