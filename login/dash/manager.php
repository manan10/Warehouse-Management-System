<?php
	session_start();
	if(strcmp($_SESSION['un'],"") == 0)
	{	
		header('Location: ../manager_login.html');
	}
?>
<html>
    <head>
        <title>Manager | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=2">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4/7/.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|ZCOOL+XiaoWei" rel="stylesheet">
        <style>
        	a:link,a:visited,a:active
        	{
        		color: black;
        	}
        	#el li a:hover
        	{
        		background-color: white;
        	}
        </style>	
    </head>

    <body style="background-color: #e6e6e6">
    	<nav class="navbar navbar-default" style="font-size:18px; border-radius:0px; background-color:black; border-width:0px; font-family: josefin sans;">
			<div class="container-fluid">
				<div class="navbar-header">
			  		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  	<span class="icon-bar"></span>
					  	<span class="icon-bar"></span>
					  	<span class="icon-bar"></span>                        
			  		</button>
				  	<a class="navbar-brand" href="#" style="font-family:Cooper Black;">WMS</a>
			 	</div>
			  
				<div class="collapse navbar-collapse" id="myNavbar">
			  		<ul class="nav navbar-nav navbar-right">
						<li><a href="manager.php">Dashboard</a></li>
				  		<li><a href="../../php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
			  		</ul>
	  			</div>
	  		</div>
        </nav>

        <center>
			<div class="container-fluid">
				<div class="row">
				<div class="container col-md-2 col-lg-2 bor" style="color: black;border-radius: 2px;">
					<h3 style="font-family: josefin sans">MENU</h3>
					<hr>
					<ul class="nav nav-pills nav-stacked" id="el" style="text-align:left">
						<li><a style="font-size: 20px;" href="../../php/data/inventory.php" target="frame">Inventory</a></li>
						<li><a style="font-size: 20px;" href="m_add.html" target="frame">Add Product</a></li>
						<li><a style="font-size: 20px;" href="m_del.html" target="frame">Remove Product</a></li>
						<li><a style="font-size: 20px;" href="m_up.html" target="frame">Update Product</a></li>
					</ul>
				</div>
				<div class="col-md-10 col-lg-10">
				<iframe height="100%" width="100%" name="frame" style="background-color: white;" src="../../php/m-frame.php"></iframe>
			</div>	
		</div>
		</center>
	</body>	
</html>             	