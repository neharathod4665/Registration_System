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

$sql = "CREATE TABLE contact1 (
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message VARCHAR(70) NOT NULL
    
)";
$result = mysqli_query($conn,$sql);





//check for the table creation success
if($result){

    echo "the contact1 table was created successfully!<br>";

    }
else{
    echo "The contact1 table was not created successfully because of this error --->". mysqli_error($conn);
}


?>

