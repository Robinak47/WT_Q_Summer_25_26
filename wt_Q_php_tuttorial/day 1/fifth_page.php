<?php

    function sum($a, $b)
    {
        return $a+$b;
    }

    $add=sum(10,20);
    echo  $add;

    function sayHello()
    {
        echo "<br>", "Hello There";
    }

    sayHello();


    function printArray($arr)
    {
        foreach($arr as $ele)
            {
                echo "<br>", $ele;
            }
    }


    printArray(["1",0,9]);

?>