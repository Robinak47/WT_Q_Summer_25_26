<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="css/login.css" ; </head>

<body>
    <form action="../controllers/loginControls.php" method="post">
        <label for="userId">User Id:</label>
        <input type="text" name="userId" id="userId"><br>
        <span>

            <?php
        if(isset($_GET["userIdErr"]))
            {
                echo $_GET["userIdErr"];
            }

        ?>

        </span><br>

        <label for="pass">password:</label>
        <input type="password" name="pass" id="pass"><br>
        <span>
            <?php
        if(isset($_GET["passErr"]))
            {
                echo $_GET["passErr"];
            }

        ?>
        </span><br>

        <input type="submit" name="submit" value="submit" id="submit">


    </form>

    <span>
        <?php
        if(isset($_GET["notFoundErr"]))
            {
                echo $_GET["notFoundErr"];
            }

        ?>
    </span>


</body>

</html>