<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    
}

// connectimg to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbms1";

// create a connection
$conn = mysqli_connect($servername,$username,$password,$database);
// die if connection was not successful
if(!$conn){
    die("sorry we failed to connect:". mysqli_connect_error());
}
else{
    echo "connection was successful <br>";

}
// submit this to a database
// sql query to be executed
$sql = "INSERT INTO `register1` (`name`, `pass`, `cpassword`, `email`, `dob`, `gender`) VALUES ('$name', '$pass', '$cpassword', '$email', '$dob', '$gender')";
$result = mysqli_query($conn,$sql);

// add a new record to the register table in the database
if($result){

    echo "the record was inserted successfully!<br>";

    }
else{
    echo "The record was not inserted successfully because of this error --->". mysqli_error($conn);
}


?>

