<?php
$id=$_POST['email'];
$psw=$_POST['password'];
$conn = mysqli_connect("localhost","root","","connect");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO signin (user,password) VALUES ('$id','$psw')";
if ($conn->query($sql) === TRUE) {
  echo nl2br("\n");
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>