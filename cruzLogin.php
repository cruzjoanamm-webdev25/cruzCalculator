<?php
    session_start();

    $conn = mysqli_connect("localhost","root","","usersss");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>

    <style>
        body{
            padding: 20px;
            background-color: lightblue;
        }

        h1{
            font-family: Tahoma;
            color: blue;
        }
        h3, p{
            font-family: Helvetica;
            color: green;
        }
        input{
            padding: 5px;
        }
        button{
            padding: 10px;
            width: 150px;
            background-color: blue;
            color: white;
            cursor: pointer;
        }
        #cruzClear{
            padding: 10px;
            width: 150px;
            background-color: blue;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>LOG IN</h1>
        <form method="post">
            <table>
                <tr>
                    <td><input type="text" name="uname" placeholder="Username" required></td>
                    <td><input type="password" name="pass" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td><button type="submit" name="loginbtn">Log In</button></td>
                    <td><button type="reset" id="cruzClear">Clear</button></td>
                </tr>
            </table>
        </form>
        <p id="status"></p>
        <p>Don't have an account? <a href="cruzRegister.php">Register</a></p>
    </div>

    <?php

        if(isset($_POST['loginbtn'])){
            $uname = $_POST['uname'];
            $pass = $_POST['pass'];

            $sql = "SELECT * FROM user_list WHERE uname = '$uname'";
            $res = mysqli_query($conn, $sql);

            if(mysqli_num_rows($res)===1){
                $user = mysqli_fetch_assoc($res);
                $password = $user['password'];

                if($pass === $password){
                    echo "
                    <script>
                        document.getElementById('status').innerText = 'Logging In...';
                        document.getElementById('status').style.color = 'green';
                    </script>
                    ";

                    sleep(3);

                    header("location: cruzMainPage.php");
                }
                else{
                    echo "
                    <script>
                        document.getElementById('status').innerText = 'Invalid username or password';
                        document.getElementById('status').style.color = 'red';
                    </script>
                    ";
                }
            }
            else{
                echo "
                    <script>
                        document.getElementById('status').innerText = 'Invalid username or password';
                        document.getElementById('status').style.color = 'red';
                    </script>
                    ";
            }
        }
    ?>
</body>
</html>