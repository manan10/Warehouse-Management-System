<?php
	session_start();
	if(strcmp($_SESSION['un'],"") == 0)
	{	
		header('Location: ../login/user_login.html');
	}
?>

<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=2">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4/7/.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>

	<body style="background-color: #282828;color:white;">
		<center>
			<h1 style="margin-top: 60px;font-family: Algerian;"> Welcome
			<?php
				echo $_SESSION['un'];
			?>
			</h1>
		</center> 	
	</body>
</html>