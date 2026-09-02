<?php
session_start();
if(isset($_SESSION["userId"]) && isset($_SESSION["role"]))
{
    if($_SESSION["role"]=="customer")
    {
        
    }

    else if($_SESSION["role"]=="employee")
    {
        header("Location: ../employee/employeeDashboard.php");
    }

    else if($_SESSION["role"]=="admin")
    {
        header("Location: ../admin/adminDashboard.php");
    }
    else
    {  
        header("Location:../login.php");
    }
}
else
{
    header("Location:../login.php");
}


?>

<!doctype html>
<html>

<head>

</head>

<body>
    <h1> Welcome customer</h1>
</body>

</html>