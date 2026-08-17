<?php

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=trim($_POST["name"]);
        $age=$_POST["age"];
        $email=trim($_POST["email"]);
        $gender=$_POST["gender"]??"";
        $sports=$_POST["sports"]??"";
        $country=$_POST["country"];
        $file_error=$_FILES["proPic"]["error"];
        $file_type=$_FILES["proPic"]["type"];
        $allowedType=["application/pdf", "image/jpeg"];

        if($name=="")
        {
            echo "name cannot be Empty","<br>";
        }
        elseif(!preg_match('/^[a-zA-Z\' -]+$/', $name))
        {
            echo "name cannot have any numbers or special chars","<br>"; 
        }
        else
        {
            echo $name,"<br>";
        }

        if(empty($age))
        {
            echo "age connot be empty","<br>";
        }
        elseif(!filter_var($age, FILTER_VALIDATE_INT))
        {
            echo "age should be int value","<br>";
        }
        elseif($age<20 || $age>80)
        {
            echo "age should not be less than 20 or grater than 80","<br>";
        }
        else
        {
            echo $age,"<br>";
        }
        if(empty($email))
        {
            echo "email connot be empty","<br>";  
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            echo "Provide a valid Email","<br>";  
        }
        else
        {
            echo $email,"<br>";
        }
       
        if(empty($gender))
        {
            echo "Gender Must be selected","<br>";   
        }
        else
        {
            echo $gender,"<br>";
        }
        if(empty($sports))
        {
            echo "Plese Select at least one Sports","<br>"; 
        }
        else
        {
            echo implode(", ", $sports),"<br>";
            
        }

        if(empty($country))
        {
            echo "country should be selected","<br>";
        }
        else
        {
            echo $country,"<br>";
        }

        if($file_error==4)
        {
            echo "please upload a file","<br>";
        }
        elseif(!in_array($file_type,$allowedType))
        {
            echo "please select only pdf or jpeg image";
        }
      

        

        



        
    }

    
        


?>