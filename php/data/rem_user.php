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
    
        $sql = "delete from user where un='".$_POST['un']."'";
        $con->exec($sql);

        echo "<script>alert(\"User Removed\");window.open(\"../../login/dash/admin.php\",\"_parent\");</script>";
    } 
    else 
    {
        echo "Sorry :(";
    }
?>