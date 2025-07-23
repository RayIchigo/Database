<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$name = $_POST["name"];
$age = $_POST["age"];

echo $name;
echo "<br>";
echo $age;
echo "<br>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO userstable (id, name, age)
VALUES ('', '$name', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>