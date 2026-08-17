<!doctype html>
<html>

<head>

</head>

<body>
    <form action="data_control.php" method="post" enctype="multipart/form-data">
        <label> Name: </label>
        <input type="text" id="name" name="name" value=""><br>
        <span> </span><br>

        <label> Age: </label>
        <input type="number" id="age" name="age" value=""><br>
        <span> </span><br>

        <label> email: </label>
        <input type="text" id="email" name="email" value=""><br>
        <span> </span><br>

        <label> Gender: </label>
        <input type="radio" id="maleRB" name="gender" value="male">Male
        <input type="radio" id="femaleRB" name="gender" value="female">Female<br>
        <span> </span><br>

        <label> Fab Sports: </label>
        <input type="checkbox" id="cricketCB" name="sports[]" value="cricket">Cricket
        <input type="checkBox" id="footballCB" name="sports[]" value="football">Football<br>
        <span> </span><br>

        <label> Select Country</label>
        <select name="country" id="country">
            <option value="">select a country</option>
            <option value="usa">USA</option>
            <option value="UK">UK</option>
            <option value="aus">AUS</option>

        </select><br>
        <span> </span><br>

        <label> Choose profile Pic</label>
        <input type="file" name="proPic" id="proPic"><br>
        <span></span><br>

        <input type="submit" name="submit" id="submit" value="submit">
        <input type="reset" name="reset" id="reset" value="reset">





    </form>
</body>

</html>