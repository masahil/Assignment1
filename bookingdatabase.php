<?php
$id=$_POST['yourname'];
$email=$_POST['email'];
$conn = mysqli_connect("localhost","root","","connect");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
$sql = "INSERT INTO Bookingpage.html (user,password) VALUES ('$id','$psw')";
if ($conn->query($sql) === TRUE) {
  echo nl2br("\n");
  echo "Logged in successfully";
} else {
  echo "Error: " . $sql . "<br/>" . $conn->error;
}
$conn->close();

?>