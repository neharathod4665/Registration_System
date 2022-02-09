<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    
}

// connectimg to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbms";

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
$sql = "INSERT INTO `register` (`username`, `password`, `cpassword`, `email`, `dob`, `gender`) VALUES ('neha', 'qwe1', 'qwe1', 'em@gma.com', '2020-10-11', 'F')";
$result = mysqli_query($conn,$sql);

// add a new record to the register table in the database
if($result){

echo "the record was inserted successfully!<br>";

    // echo '<div class="alert alert-success alert-dismissible fade show"  role="alert">
    // <strong>Success!<strong> Your entry has been submitted successfully!
    // <button type="button" class="close" data-dismiss="alert" aria-label="close">
    // <span aria-hidden="true">&times;<span>
    // </button>
    // </div>';
    }
else{
    echo "The record was not inserted successfully because of this error --->". mysqli_error($conn);
}


?>

