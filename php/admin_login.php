<?php
    session_start();
    //https://stackoverflow.com/questions/13183579/pdo-get-data-from-database
    $con = new PDO("mysql:host=localhost;dbname=wms","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $con->prepare("SELECT * FROM admin");
    $stmt->execute();
    $rows = $stmt->fetchAll();
    $cnt = 0;

    if(count($rows) > 0)
    {
        foreach($rows as $row)
        {
            if(strcmp($row['un'],$_POST['un']) == 0)
            {
                if(strcmp($row['pwd'],$_POST['pwd']) == 0)
                {
                    $_SESSION['un'] = $_POST['un'];
                    header('Location: ../login/dash/admin.php');
                }

                else if(strcmp($row['pwd'],$_POST['pwd']) != 0)
                    header('Location: ../login/admin_login.html');
            }
            else    
                $cnt++;
        }
        if($cnt == count($rows))
            header('Location: ../login/admin_login.html');
    }
?>