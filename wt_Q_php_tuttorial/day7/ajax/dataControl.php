<?php

   
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $data=$_POST["data"];

        $userInfo=["name"=>"moew", "age"=>30];
        $jsonData=json_encode($userInfo);
        
       
        header('Content-Type: application/json');
        echo $jsonData;
        

    }


?>