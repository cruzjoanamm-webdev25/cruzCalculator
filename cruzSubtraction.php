<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background: goldenrod;
            padding: 20px;
        }

        h1{
            color: blue;
            font-family: Tahoma;
            text-align: left;
            font-size: 40px; 
        }
        label{
            color: whitesmoke;
            font-family: Helvetica;
            text-align: left;
            font-size: 20px; 
        }
        button{
            background-color: green;
            color: white;
            width: 150px;
            border-color: green;
            height: 40px;
            cursor: pointer;
            border-radius: 10px;
        }
        button:hover, #cruzClear:hover{
            background-color: white;
            color: green;
        }

        input{
            padding: 10px;
        }

        #cruzClear{
            background-color: green;
            border-color: green;
            color: white;
            font-size: 16px;
            width: 150px;
            height: 40px;
        }
    </style>
</head>
<body>
    <h1>SUBTRACTION</h1>
    <form method="post">
        <table>
            <tr>
                <td><label for="num1">Enter first number: </label></td>
                <td><input type="number" name="num1" required></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><label for="num2">Enter second number: </label></td>
                <td><input type="number" name="num2" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="btn">Subtract</button></td>
                <td><button type="reset" id="cruzClear">Clear</button></td>
            </tr>
        </table>
        <br>
        
    </form>
    <br><br>
    <label for="ans" id="l">num1 - num2 =</label>
    <input type="number" name="ans" id="ans" disabled>

    <?php
        if(isset($_POST['btn'])){

            include "cruzConn.php";

            $cruzNum1 = $_POST['num1'];
            $cruzNum2 = $_POST['num2'];

            if($cruzNum1!=""&&$cruzNum2!="")
            {
                $cruzDiff = $cruzNum1 - $cruzNum2;
                echo "<script>
                    document.getElementById('ans').value = {$cruzDiff};
                </script>";

                $sql = "INSERT INTO cruzSubtraction (`cruz_FirstNumber`,`cruz_SecondNumber`,`cruz_Difference`) VALUES ('$cruzNum1','$cruzNum2','$cruzDiff')";
                $res = mysqli_query($cruzConn, $sql);
            }
        }
    ?>
</body>
</html>