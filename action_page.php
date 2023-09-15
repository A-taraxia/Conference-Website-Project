<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "emojis";

$conn = mysqli_connect($servername, $username, $password, $dbname); 

if (!$conn)
{
 die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

$sql = "INSERT INTO `signup`(`fname`,`lname`,`gender`,`email`,`phone`, `username`, `pwd`,`oroi`)VALUES('".$_POST['fname']."','".$_POST['lname']."','".$_POST['gender']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['username']."','".$_POST['pwd']."','".$_POST['oroi']."');";

$result = mysqli_query($conn, $sql);

echo "<br>";
echo $sql;
echo "<br>";

if ($result)
{
echo"<script>location.href='success.php'</script>";
}


mysqli_close($conn);

?>