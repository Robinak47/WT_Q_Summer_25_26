<!doctype html>
<html>

<head>

</head>

<body>
    <form action="data_control.php" method="post" enctype="multipart/form-data">
        <label> Name: </label>
        <input type="text" id="name" name="name" value=""><br>
        <span style="color:red;"><?php

            if(isset($_GET["nameError"]))
            {
                echo $_GET["nameError"];
            }
         ?> </span><br>

        <label> Age: </label>
        <input type="number" id="age" name="age" value=""><br>
        <span style="color:red;"><?php

            if(isset($_GET["ageError"]))
            {
            echo $_GET["ageError"];
            }
            ?>
        </span><br>

        <label> email: </label>
        <input type="text" id="email" name="email" value=""><br>
        <span style="color:red;"><?php

            if(isset($_GET["emailError"]))
            {
            echo $_GET["emailError"];
            }
            ?>
        </span><br>

        <label> Gender: </label>
        <input type="radio" id="maleRB" name="gender" value="male">Male
        <input type="radio" id="femaleRB" name="gender" value="female">Female<br>
        <span style="color:red;"><?php

            if(isset($_GET["genderError"]))
            {
            echo $_GET["genderError"];
            }
            ?>
        </span><br>

        <label> Fab Sports: </label>
        <input type="checkbox" id="cricketCB" name="sports[]" value="cricket">Cricket
        <input type="checkBox" id="footballCB" name="sports[]" value="football">Football<br>
        <span style="color:red;"><?php

            if(isset($_GET["sportsError"]))
            {
            echo $_GET["sportsError"];
            }
            ?>
        </span><br>

        <label> Select Country</label>
        <select name="country" id="country">
            <option value="">select a country</option>
            <option value="usa">USA</option>
            <option value="UK">UK</option>
            <option value="aus">AUS</option>

        </select><br>
        <span style="color:red;"><?php

            if(isset($_GET["countryError"]))
            {
            echo $_GET["countryError"];
            }
            ?>
        </span><br>

        <label> Choose profile Pic</label>
        <input type="file" name="proPic" id="proPic"><br>
        <span style="color:red;"><?php

            if(isset($_GET["fileError"]))
            {
            echo $_GET["fileError"];
            }
            ?>
        </span><br>

        <input type="submit" name="submit" id="submit" value="submit">
        <input type="reset" name="reset" id="reset" value="reset">





    </form>
</body>

</html>