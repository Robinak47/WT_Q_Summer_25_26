<?php

    if(isset($_COOKIE["theme_preffernce"]))
    {
        echo $_COOKIE["theme_preffernce"];
    }
    else
    {
        echo "no preffernce";
    }

?>