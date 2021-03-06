<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<link rel="stylesheet" href="css/style.css">

<style>
    /* css reset */

    body {
        margin: 0px;
        padding: 0px;
        background: url("real1.png")no-repeat center center/cover;
    }

    .reg {
        display: block;
        position: relative;

        margin: 40px 70px;
        padding: 2px 3px;
        width: 50%;

    }

    .reg p {

        color: black;
        font-size: 20px;

    }



    .reg h1 {
        text-align: center;
        background-color: rosybrown;
        color: black;
        top: 350px;
        border: 3px solid black;
        border-radius: 4px;

    }

    .form-group input {
        position: relative;
        text-align: center;
        display: inline;
        width: 750px;
        margin: 11px;
        padding: 1px;
        border: 3px solid red;
        font-size: 15px;
        border-radius: 4px;

    }

    .form-group label {
        text-align: left;
        text-size-adjust: 20px;
        font-size: 20px;
        display: inline-block;
        padding: 2px;
        color: rgb(10, 10, 10);

    }

    #radio {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        margin: 10px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 17px;
    }


    .button input {
        display: inline-block;
        width: 20%;
        margin: 17px 19px;
        background-color: yellowgreen;
        color: white;
        padding: 19px, 20px;
        border: 4px solid black;
        border-radius: 10px;
        font-size: 21px;
        cursor: pointer;
        bottom: 52px;
        text-align: center
    }

    .button input:hover {
        background-color: tomato;
        text-decoration: underline;
    }
</style>

<body>


    <div class="reg">

        <p>Please fill in this form to create an account.</p>
        <hr><br>
        <h1>Registration for User & Admin</h1><br><br>



        <form action="" method="POST">

            <div class="form-group">
                <b><label for="name">Username </label></b>
                <input type="text" placeholder="Enter your name" name="username" id="name">
            </div>



            <div class="form-group">
                <b><label for="pwd">Password </label></b>
                <input type="password" placeholder="Enter a password" name="password" id="pwd">
            </div>

            <div class="form-group">
                <b><label for="pwd1">Confirm Password </label></b>
                <input type="password" placeholder="Confirm password" name="cpassword" id="pwd1">
            </div>




            <div class="form-group">
                <b><label for="email">Email Id &nbsp;</label></b>
                <input type="email" placeholder="Enter Email" name="email" id="email">
            </div>

            <div class="form-group">
                <b><label for="dob">DOB </label></b>
                <input type="date" name="dob" id="dob">
            </div>



            <div class="form-group">

                <b><label for="gender">Gender : </label></b><br>
                <div id="radio">
                    Male<input type="radio" name="myGender" id="gender">
                    Female<input type="radio" name="myGender" id="gender">
                </div>
            </div><br>



            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>



            <div class="button">
                <input type="submit" value="Register Now">
                <input type="reset" value="Reset">
            </div>


            <div>
                <p>Already have an account? <a href="#">Sign in</a>.</p>

            </div>

        </form>

        <?php
        
        if(isset($_POST['Register Now']))
        {
            
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $result=mysqli_query($mysqli,"INSERT into register  VALUES ('$username', '$password', '$cpassword', '$email', '$dob', '$gender')");
    if($result)
    {
        echo "success";
    }
    else{
        echo "failed";
    }
    
        }
        ?>

</body>

</html>