<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>

<table>
<tr>
<th>Name</th>
<th>Pass</th>
<th>Confirmpass</th>
<th>Email</th>
<th>Dob</th>
<th>Gender</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "dbms1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM register1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["pass"] . "</td><td>"
. $row["cpassword"]. "</td><td>" . $row["email"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["gender"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>



