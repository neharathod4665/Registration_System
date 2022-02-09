<?php
// connectimg to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbms1";

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//  die if connection was not successful
if(!$conn){
    die("sorry we failed to connect:". mysqli_connect_error());
}
else{
    echo "connection was successful <br>";

}

// create table into the dbms1

$sql = "CREATE TABLE register1 (
    name VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    cpassword VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    dob VARCHAR(50) NOT NULL,
    gender VARCHAR(50) NOT NULL
)";
$result = mysqli_query($conn,$sql);

//check for the table creation success
if($result){

    echo "the register1 table was created successfully!<br>";

    }
else{
    echo "The register1 table was not created successfully because of this error --->". mysqli_error($conn);
}


?>

