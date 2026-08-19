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
        $file_size=$_FILES["proPic"]["size"];
        $max_size=2*1024*1024;
        $file_name=$_FILES["proPic"]["name"];
        $hasError=false;
        $nameError="";
        $ageError="";
        $emailError="";
        $genderError="";
        $sportsError="";
        $countryError="";
        $fileError="";

        if($name=="")
        {
            $nameError="name cannot be Empty";
            $hasError=true;
        }
        elseif(!preg_match('/^[a-zA-Z\' -]+$/', $name))
        {
            $nameError="name cannot have any numbers or special chars";
            $hasError=true; 
        }
       

        if(empty($age))
        {
            $ageError="age connot be empty";
            $hasError=true;
        }
        elseif(!filter_var($age, FILTER_VALIDATE_INT))
        {
            $ageError="age should be int value";
            $hasError=true;
        }
        elseif($age<20 || $age>80)
        {
            $ageError="age should not be less than 20 or grater than 80";
            $hasError=true;
        }
        
        if(empty($email))
        {
            $emailError="email connot be empty";  
            $hasError=true;
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailError="Provide a valid Email";
            $hasError=true;  
        }
        
       
        if(empty($gender))
        {
            $genderError="Gender Must be selected";
            $hasError=true;   
        }
        
        if(empty($sports))
        {
            $sportsError="Plese Select at least one Sports"; 
            $hasError=true;
        }
        

        if(empty($country))
        {
            $countryError="country should be selected";
            $hasError=true;
        }
        

        if($file_error==4)
        {
            $file_error="please upload a file";
            $hasError=true;
        }
        elseif(!in_array($file_type,$allowedType))
        {
            $file_error="please select only pdf or jpeg image";
            $hasError=true;
        }
        elseif($file_size>$max_size)
        {
            $file_error="File is Too large";
            $hasError=true;
        }
        else
        {
            echo $file_name;
            $uploadDir = __DIR__ . "/upload/"; 
            $temp_loc=$_FILES["proPic"]["tmp_name"];

            if(!is_dir($uploadDir))
            {
             mkdir($uploadDir, 0755, true);
             

            }

            $destination=$uploadDir.$file_name;
            
            $success=move_uploaded_file($temp_loc, $destination);
            if($success)
            {
               
            }
            else
            {
                $fileError="cannot move the uploaded file";
                $hasError=true;
                
            }


            
        }
        if($hasError)
        {
        $url = "index.php?nameError=" . urlencode($nameError) 
        . "&ageError=" . urlencode($ageError) 
        . "&emailError=" . urlencode($emailError) 
        . "&genderError=" . urlencode($genderError) 
        . "&sportsError=" . urlencode($sportsError) 
        . "&countryError=" . urlencode($countryError) 
        . "&fileError=" . urlencode($file_error);
        header("Location:".$url);
            
        }

        else
        {
            echo $name,"<br>";
            echo $age,"<br>";
            echo $email,"<br>";
            echo $gender,"<br>";
            echo implode(", ", $sports),"<br>";
            echo $country,"<br>";
            echo "file upload succesfully";

        }
      

        

        



        
    }

    
        


?>