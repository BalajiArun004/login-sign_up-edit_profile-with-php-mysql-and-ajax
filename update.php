<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guvi";


$fname=$_POST['first'];
$lname=$_POST['last'];
$abt=$_POST['abt'];
$country=$_POST['country'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$linked=$_POST['linked'];
$git=$_POST['git'];
$web=$_POST['web'];
$edu=$_POST['edu'];
$cooky=$_SESSION["favcolor"];// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE users SET fname='$fname',lname='$lname',email='$email',gender='$gender',abt='$abt',country='$country',linked='$linked',web='$web',git='$git',edu='$edu' where email='$cooky'";


if ($conn->query($sql) === TRUE) {
    header('Location: confirm.php');
} else {
    echo "0 results";
    echo $fname.$cooky;
}
$conn->close();
?>