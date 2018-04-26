<?php
  $user = $_POST['inputUsername'];
  $pass = $_POST['inputPassword'];

  if(isset($_POST['submit'])){
    if($user == "root"){
      if($pass == "Anyware18"){
        require('query.html');
      }
    }
    else{
      require('../mysqli_con.php');
    }
  }
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Sign in for chatbot">
<meta name="author" content="J. Isaac Cook">

<title>Sign in for chatbot</title>

<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="CSS/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form method="post">
<h1 class="h2 mb-3 font-weight-normal">Anyware Chatbot</h1>
<h2 class="h3 mb-3 font-weight-normal">Please Sign In</h2>
<label for="inputUsername" class="sr-only">Username</label>
<input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
<label for="inputPassword" class="sr-only">Password</label>
<input type="text" id="inputPassword" class="form-control" placeholder="Password" required>
<input type="submit" name="submit" value="LOGIN">

</form>
</body>
</html>
