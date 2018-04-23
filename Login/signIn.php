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
<form method="post" action="verifyLogin.php">
<h1 class="h2 mb-3 font-weight-normal">Anyware Chatbot</h1>
<h2 class="h3 mb-3 font-weight-normal">Please Sign In</h2>
<label for="inputUsername" class="sr-only">Username</label>
<input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
<label for="inputPassword" class="sr-only">Password</label>
<input type="text" id="inputPassword" class="form-control" placeholder="Password" required>
<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>

</form>
</body>
</html>