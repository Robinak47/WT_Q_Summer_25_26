<?php

    $associative_Arry=["cat_name"=>"meow", "no_of_bats"=>3, "cgpa"=>3.14];

    echo $associative_Arry["cat_name"],"<br>";
    echo $associative_Arry["no_of_bats"],"<br>";
    

    $associative_Arry["cat_name"]="Tom";
    echo $associative_Arry["cat_name"],"<br>";


    foreach($associative_Arry as $key=>$arr)
        {
            echo $key,"=>",$arr,"<br>";
        }


    $studentsInfo=[["student_1"=>["name"=>"Mr. Meow", "age"=>20, "cgpa"=>4.00, "id"=>"23-88982-2"]],
    ["student_2"=>["name"=>"Mr. Tom", "age"=>25, "cgpa"=>2.49, "id"=>"18-88982-2"]],
    ];

    foreach($studentsInfo as $key=>$student)
        {

           
            foreach($student as $innerKey=>$stu)
                {
                    echo $innerKey, "info: ","<br>";
                   foreach($stu as $skey=>$s)
                    {
                        echo $skey,"=>",$s,",";
                    }

                    echo "<br>";
                    
                }

        }

?>