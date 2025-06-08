<?php
    session_start();

    $conn = mysqli_connect("localhost","root","","usersss");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            padding: 20px;
            background-color: lightyellow;
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
        }
    </style>
</head>
<body>
    <div>
        <h1>Registration</h1>
        <form method="post">
            <table>
                <tr>
                    <td colspan="4"><h3>Enter your details</h3></td>
                </tr>
                <tr><td colspan="4"><h3>Full Name</h3></td></tr>
                <tr>
                    <td><input type="text" name="lastname" required placeholder="Last Name"></td>
                    <td><input type="text" name="firstname" required placeholder="First Name"></td>
                </tr>
                <tr><td colspan="4"><h3>Account details</h3></td></tr>
                <tr>
                    <td><input type="text" name="email" required placeholder="Email"></td>
                    <td><input type="text" name="uname" required placeholder="Username"></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" required placeholder="Password"></td>
                    <td><input type="password" name="cpass" required placeholder="Re-enter Password"></td>
                </tr>
                <tr>
                    <td colspan="4"><h3>Contact Information</h3></td>
                </tr>
                <tr>
                    <td><input type="text" name="con_no" required placeholder="Contact No."></td>
                </tr>
                <tr>
                    <td><input type="text" name="st_add" required placeholder="Street Address"></td>
                    <td><input type="text" name="barangay" required placeholder="Barangay"></td>
                </tr>
                <tr>
                    <td><input type="text" name="city" required placeholder="City"></td>
                    <td><input type="text" name="state_prov" required placeholder="State/Province"></td>
                </tr>
                <tr>
                    <td><input type="text" name="zip" required placeholder="Zip Code"></td>
                    <td><input type="text" name="country" required placeholder="Country"></td>
                </tr>
                
            </table>
            <br>
            <button type="submit" name="regbtn">Register</button>
        </form>
        <p id="status"></p>
        <p>Already have an account? <a href="cruzLogin.php">Log In</a></p>
    </div>

    <?php

        if(isset($_POST['regbtn'])){
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $uname = $_POST['uname'];
            $pass = $_POST['pass'];
            $cpass = $_POST['cpass'];
            $con_no = $_POST['con_no'];
            $st_add = $_POST['st_add'];
            $barangay = $_POST['barangay'];
            $city = $_POST['city'];
            $state_prov = $_POST['state_prov'];
            $zip = $_POST['zip'];
            $country = $_POST['country'];


            $sql = "INSERT INTO user_list (`lastname`,`firstname`,`email`,`uname`,`password`,`phone_number`,`st_add`,`barangay`,`city`,`state_prov`,`zip`,`country`) VALUES ('$lastname','$firstname','$email','$uname','$pass','$con_no','$st_add','$barangay','$city','$state_prov','$zip','$country')";

            $res = mysqli_query($conn, $sql);

            if($res){
                echo "
                    <script>
                        document.getElementById('status').innerText = 'Registered. You may now log in to your account.';
                        document.getElementById('status').style.color = 'green';
                    </script>
                    ";

                    sleep(3);

                    header("location: cruzLogin.php");
            }
            else{
                echo "
                    <script>
                        document.getElementById('status').innerText = 'Something went wrong.';
                        document.getElementById('status').style.color = 'red';
                    </script>
                    ";
            }
        }
    ?>
</body>
</html>