<?php



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
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
$sql = "SELECT name, pass FROM register1 WHERE name = '$name' and pass = '$pass'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "name: " . $row["name"]. " - pass: "  . $row["pass"]. "<br>";
      // echo "<tr><td>" . $row["name"]. "</td><td>" . $row["pass"] . "</td></tr>";
    }
  } else {
    echo "0 results";
  }
  
  
  
// add a new record to the register table in the database
if($result){

    echo "logged in successfully!<br>";

    }
else{
    echo "not logged in because of this error --->". mysqli_error($conn);
}

mysqli_close($conn);

?>

