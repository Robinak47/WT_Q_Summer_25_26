<?php


    $arr=["meow", 3.1416, 89, true, [1,2,3]];
    

    foreach($arr as $ele)
        {
            if(!is_array($ele))
                {
            echo "<br>", $ele;
                }
            
            if(is_array($ele))
                {
                    foreach($ele as $e)
                        {
                            echo "<br>",$e;
                        }
                }
        }

        echo "<br>","index";

    foreach($arr as $index=>$ele)
        {
            echo "<br>",$index;
        }

    
        echo "<br>","printing multi arry";
    $multiArr=[[1,2,3],[4,5,6,7],[8,9,10,11,12]];

    foreach($multiArr as $singleArr)
        {
            echo "<br>";
            foreach($singleArr as $ele)
                {
                    echo $ele,"     ";
                }

               
        }
?>