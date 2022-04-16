<?php
	session_start();
	//https://stackoverflow.com/questions/21396905/create-login-and-logout-session-in-php-and-database
?>

<html lang="en">
	<head>
		<title> WMS | Inventory </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|ZCOOL+XiaoWei" rel="stylesheet">
		<style>
            body
            {
                color: silver;
                font-family: josefin sans;
            }

			#el li a:hover
      		{
       			 background-color:#3385ff;
     		}
      
     		#el
      		{
       			font-family: josefin sans;
        		text-align: left;
      		}

            th,tr,td
            {
                height: 50px;
                width: 400px;
                text-align:center;
                border-width:0px;
                border-style:solid;
            }

            tr
            {
                background-color: white;
                color:black;
            }

            th
            {
                background-color:#282828;
                color:white;
            }
        </style>
	</head>
    
	<body style="background-color: black;">
		<center>
				<div>
                    <?php   
                        $con = new PDO("mysql:host=localhost;dbname=wms","root","");
                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $stmt = $con->prepare("SELECT * FROM user");
                        $stmt->execute();
                        $rows = $stmt->fetchAll();

                        echo "<h1 style=\"font-family:zcool xiaowei;color:white;\"> User List </h1>  <br><br>";
                        echo "<table>";
                        echo "<tr> <th> Username </th> <th> Password </th> </tr>"; 

                        if(count($rows) > 0)
                        {
                            foreach($rows as $row)
                            {
                                echo "<tr> <td> ".$row['un']." </td> <td> ".$row['pwd']." </td> </tr>" ;
                            }
                        }

                        echo "</table>";
                    ?>
				</div>
        </center>
    </body>
</html>
