<?php
    session_start();
    $con = new PDO("mysql:host=localhost;dbname=wms","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $con->prepare("SELECT * FROM user");
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
                    header('Location: ../login/dash/user.php');
                }

                else if(strcmp($row['pwd'],$_POST['pwd']) != 0)
                    header('Location: ../login/user_login.html');
            }
            else    
                $cnt++;
        }
        if($cnt == count($rows))
            header('Location: ../login/user_login.html');
    }
?>