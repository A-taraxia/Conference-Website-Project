<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "emojis";


$conn = mysqli_connect($servername, $username, $password, $dbname);

$user = $_POST['user'];
$pass = $_POST['password'];
$sql = "select* from signup where username = '$user' and pwd = '$pass'";
$result=mysqli_query($conn, $sql) or die("Failed to connect" .mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['username'] === $user && $row['pwd'] === $pass){
	// echo "Login success!!! Welcome " .$row['username'];
	echo"<script>location.href='programma.html'</script>";
}
else{
	echo "<script> alert('Failed to login')</script>";
}
?>