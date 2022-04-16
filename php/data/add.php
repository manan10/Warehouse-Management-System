<?php
    
    session_start();
    if(isset($_POST) && !empty($_POST)) 
    {
        $con = new PDO("mysql:host=localhost;dbname=wms","root","");//mysqli_connect("localhost","root","","co_olympics");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(!$con)
        {
            die('could not connect: '.mysqli_connect_error());
        }
    
        $sql = "INSERT INTO product VALUES(".$_POST['id'].",'".$_POST['name']."','".$_POST['company']."','".$_POST['type']."','".$_POST['doa']."','".$_POST['dod']."','".$_POST['cus_name']."','".$_POST['cus_add']."')";
        $con->exec($sql);

        echo "<script>alert(\"Product Added \");window.open(\"../../login/dash/manager.php\",\"_parent\");</script>";
    } 
    else 
    {
        echo "Sorry :(";
    }
?>