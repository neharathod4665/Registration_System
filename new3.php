<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   
}

// connectimg to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbms1";

// create a connection
$conn = mysqli_connect($servername,$username,$password,$database);



// sql query to be executed
$sql = "INSERT INTO `contact1` (`firstname`, `lastname`, `email`, `message`) VALUES ('$firstname', '$lastname', '$email', '$message')";
$result = mysqli_query($conn,$sql);

// add a new record to the register table in the database
if($result){

    echo "the record was inserted successfully!<br>";

    }
else{
    echo "The record was not inserted successfully because of this error --->". mysqli_error($conn);
}


?>

