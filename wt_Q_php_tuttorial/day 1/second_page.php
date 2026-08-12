<!doctype html>
<html>

<head>
    <style>
    body {
        background-color: magenta;
    }

    h1 {
        width: 400px;
        height: 300px;
        border: 2px solid white;
    }

    button {
        width: 200px;
        height: 40px;
    }
    </style>
</head>

<body>
    <h1> Hello there <?php $name="tom"; echo $name;
     ?></h1>

    <button onclick="sayHello()"></button>
    <script>
    function sayHello() {
        alert("hello");
    }
    </script>
</body>

</html>