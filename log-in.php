<!DOCTYPE html>
<html>
<head>
<title>log-In</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css4.css">
<link rel="icon" href="https://media4.giphy.com/media/8YR08iWS6UzurRrsAh/source.gif">
</head>
<style>
body {
  background-color: #332F32 ;
  background-image:none;
}
h1{
font-family:Papyrus;
}
table{
width:50%;
border-radius:20px 20px 20px 20px;
overflow:hidden;
text-align:center;
}
td,th,tr{
text-align:center;
}
#mybtn {
  background-color: #332F32;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}
</style>
<body>
<center>
	<div class="myDiv"><h1><b>Emoji2021 - 4th​ International Workshop on Emoji Understanding and Applications in Social Media</b></h1></div>
	</center>
<center>
<form method="post" action="process.php">
<table>
<tr><th colspan="2"><h1>log-In to continue:</h1></th></tr>
<tr>
<td><label for="user">Username: </label></td>
<td><input type="text" id="user" name="user"></td><br></tr>
<tr>
<td><label for="password">Password: </label></td>
<td><input type="password" id="password" name="password"></td></tr>
<tr><th colspan="2"><input type="submit" name="mybtn" id="mybtn" value="Αναζήτηση"></th><br></tr>
<br><br>
</form>
</center>
	<p style="color:white;">Δεν έχετε λογαριασμό; <a href="signup.php" style="color:red;" id="rd">Εγγραφή</a></p>
</body>
</html>  