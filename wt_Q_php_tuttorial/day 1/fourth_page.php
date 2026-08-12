<?php
    $id="1001";
    function myFunc()
    {
        global $id;
        $name="tom";
        echo $name."<br>";
        // echo $GLOBALS["id"]."<br>";
        echo $id."<br>";

    }

    function countVal()
    {
        static $count=0;
        $count++;
        echo $count."<br>";
    }


    myFunc();
    // echo $id."<br>";
    countVal();
    countVal();
    countVal();

    print(100);
    print(200);
    print(300);

    echo "<br>", 100,200,300;

    $str="Bangladesh is a beautiful country";
    echo "<br>",strlen($str);
    echo "<br>", str_word_count($str);
    echo "<br>", var_dump(str_contains($str, "Bangladesh"));
    echo "<br>", strpos($str, "is");
    echo "<br>", str_starts_with($str, "india");


    echo "<br>", 10-"100a";  
    

    $num="20.88a";
    $num=(float)"20.88a";
    echo "<br>",$num;
    echo "<br>",is_numeric($num);


    echo "<br>".PHP_INT_MAX;
    echo "<br>".PHP_INT_SIZE;
    
    echo "<br>".pi();
    echo "<br>".sqrt(64);



    

    
  
    



?>