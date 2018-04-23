<?php

	//Connect to database
	require_once('../mysqli_con.php');
	echo "Connected";
	
	$query = "SELECT Username FROM Accounts";
	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0){
	   // determine the user
	   while($row = mysqli_fetch_assoc($result)) {
	   	      if ($row["Username"] == $_POST["inputUsername"]{
		      	 if ($row["Password"] == $_POST["inputPassword"]{
		      	    require('query.php');
			    }
			 }
	   }
	}

	require('loginFail.php');

?>

	
	