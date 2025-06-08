<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 60vh;
        }
        p{
            font-family: helvetica;
        }
        button{
            padding: 10px;
            cursor: pointer;
        }
        h1{
            font-family: Tahoma;
        }

        #login{
            background-color: lightblue;
        }

        #reg{
            background-color: lightyellow;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Personalize Calculator</h1>
    <br>
    <table>
        <td colspan="3"><button id="login" onclick="window.location.href='cruzLogin.php'">Log In</button></td>
        <td colspan="3"></td>
        <td colspan="3"><button id="reg" onclick="window.location.href='cruzRegister.php'">Register</button></td>
    </table>
        <br><br>
    <p>by: Joana Marie Cruz</p>
</body>
</html>