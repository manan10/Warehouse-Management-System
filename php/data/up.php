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
    
        $sql = "update product set dod='".$_POST['dod']."' where id=".$_POST['id'];
        $con->exec($sql);

        echo "<script>alert(\"Date Of Delivery Updated \");window.open(\"../../login/dash/manager.php\",\"_parent\");</script>";
    } 
    else 
    {
        echo "Sorry :(";
    }
?>