<?php
//$GLOBALS superglobal

$name="meow";

function sayMyName()
{
    echo $GLOBALS["name"];
}



sayMyName();

echo "<br>", $_SERVER["PHP_SELF"];
echo "<br>", $_SERVER["REQUEST_METHOD"];
echo "<br>", $_SERVER["SERVER_NAME"];
echo "<br>", $_SERVER["HTTP_HOST"];
echo "<br>",$_SERVER['HTTP_REFERER'];
echo "<br>",$_SERVER['HTTP_USER_AGENT'];
echo "<br>",$_SERVER['SCRIPT_NAME'];






?>


