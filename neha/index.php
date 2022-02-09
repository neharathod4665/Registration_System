<?php
echo "welcome to the database <br>"; 

// connectimg to the database
$servername = "localhost";
$username = "root";
$password = "";

// create a connection
$conn = mysqli_connect($servername,$username,$password);


// die if connection was not successful
if(!$conn){
    die("sorry we failed to connect:". mysqli_connect_error());
}
else{
    echo "connection was successful <br>";

}

// create a db
$sql ="CREATE DATABASE nkr1";
$result = mysqli_query($conn,$sql);

// check for the database creation success
if($result){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error --->". mysqli_error($conn);
}


?>