<!doctype html>
<html>

<head>

</head>

<body>
    <?php
            session_start();
            $_SESSION["meow"]="cat";
            echo $_SESSION["meow"];

            
        ?>
</body>

</html>