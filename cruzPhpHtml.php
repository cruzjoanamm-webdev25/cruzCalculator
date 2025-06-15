<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Introduction with Form</title>

    <style>
        body{
            background-color: #FFEB3B;
            font-family: Arial, sans-serif;
            padding: 30px 20px;
        }

        h2{
            color: #4A148C;
            margin-top: 20px;
        }

        label{
            font-weight: bold;
            color: #333;
        }
        input[type="text"]{
            padding: 5px;
            width: 250px;
            font-size: 16px;
        }
        input[type="submit"]{
            background-color: #4CAF50;
            color:  white;
            border: none;
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
        }

        h3{
            color: #1a237e;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Welcome to my PHP Introduction</h2>
        <br>
    <form action="" method="post">
        <label for="name">Enter your name: </label><br>
        <input type="text" name="name" id="name" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = htmlspecialchars($_POST['name']);

            echo "<h3>Hello, <span style='color: violet;'>{$name}</span>! Welcome to PHP Programming.</h3>";
        }


    ?>
</body>
</html>