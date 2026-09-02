<?php
session_start();
if(isset($_SESSION["userId"]) && isset($_SESSION["role"]))
{
    if($_SESSION["role"]=="employee")
    {
        
    }

    else if($_SESSION["role"]=="admin")
    {
        header("Location: ../admin/adminDashboard.php");
    }

    else if($_SESSION["role"]=="customer")
    {
        header("Location: ../customer/customerDashboard.php");
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
    <h1> Welcome Employee</h1>
    
</body>

</html>