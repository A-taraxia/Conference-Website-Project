<!DOCTYPE html>
<html>
  <head>
    <title>Εγγραφή</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css4.css">
	<link rel="icon" href="https://media4.giphy.com/media/8YR08iWS6UzurRrsAh/source.gif">
  </head>
	<body>
	<div class="myDiv"><h1><b>Emoji2021 - 4th​ International Workshop on Emoji Understanding and Applications in Social Media</b></h1></div>
	
<nav>
	<ul>
	<li><a href="menu.html">Κεντρική</a></li>
	<li><a href="τοποθεσία.html">Τοποθεσία</a></li>
	<li><a href="πληροφορίες.html">Πληροφορίες</a></li>
	<li><a href="proswpa.html">Διοργανωτές</a></li>
	</ul>
</nav>
	<div class="myDiv"  class="form" id="form">
	<h1 >Φόρμα Εγγραφής</h1>
	<hr>
	<div id="forma">
  <form  action="action_page.php" class="signup" method="post" id="register" name="myform">
	<label for="fname">Όνομα &nbsp </label><br>
	<input type="text" id="fname" name="fname" placeholder="Εισάγετε το όνομα σας" class="name" ><br>
	<label for="lname">Επώνυμο &nbsp </label><br>
	<input type="text" id="lname" name="lname" placeholder="Εισάγετε το επώνυμο σας" ><br>
	<input id="male " type="radio" name="gender" value="Mr">
	<label for="male">Mr</label>
	<input id="female"type="radio" name="gender" value="Mrs">
	<label for="female">Mrs</label><br>
	<label for="email">E-mail</label><br>
	<input type="email" id="email" name="email" placeholder="Εισάγετε E-mail" ><br>
    <label  for="phone">Τηλέφωνο</label><br>
    <input type="tel" id="phone" name="phone"  placeholder="Εισάγετε κινητό τηλέφωνο" ><br>
	<label  for="username">Username</label><br>
	<input type="text" id="username" name="username" placeholder="Εισάγετε username" ><br>
	<label  for="pwd">Password</label><br>
	<input type="password" id="pwd" name="pwd"  maxlength="8"  placeholder="Εισάγετε κωδικό"><br>
	<label  for="pwd">Confirm Password</label><br>
	<input type="password" id="confirm_password" name="pwd" maxlength="8"  placeholder="Επαναλάβετε κωδικό"><br>
	<input type="checkbox" id="oroi" name="oroi" value="οροι" >
	<label for="oroi">Συμφωνώ να λαμβάνω ενημερωτικά email</label><br>	

	<div class="clearfix">
      <button type="reset" onclick="ResFunction()" class="cancelbtn">Cancel</button>
      <input type="button" class="signupbtn" id="bttn" value="Submit">
    </div>
	<div class="signin">
		<p id="redirect">Ήδη εγγεγραμμένος; <a href="log-in.php" id="rd">Σύνδεση</a></p>
	</div>
 </form>
 </div>
<script>
	function ClickMe()
	{
	lengthchecker(
	document.getElementById("fname").value,
	document.getElementById("lname").value,
	document.getElementById("phone").value,
	document.getElementById("username").value,
	document.getElementById("pwd").value,
	document.getElementById("confirm_password").value,document.getElementById("email").value);
	}
	function lengthchecker(a,b,c,d,e,f,g)
	{
		var l1= /^[A-Za-z]+$/;
		var l2= /^[0-9a-zA-Z]+$/;
		var l3= /^[A-Za-zΑ-Ωα-ωίϊΐόάέύϋΰήώ]+$/;
		var l4=/^[0-9]/
		var l5=/^[a-zA-Z0-9.!#$%&'*+=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
		if((a.match(l3))&&(b.match(l3))&&(c.match(l4))&&(c.length==10) && (d.match(l1))&& (e.match(l1))&&(e===f)&& (e.length>=6)&&(e.length<=8)&& (f.length>=6) && (f.length<=8)&&(g.match(l5)))
		{
		document.getElementById("fname").style.backgroundColor="#99ff99";
		document.getElementById("lname").style.backgroundColor="#99ff99";
		document.getElementById("email").style.backgroundColor="#99ff99";
		document.getElementById("phone").style.backgroundColor="#99ff99";
		document.getElementById("username").style.backgroundColor="#99ff99";
		document.getElementById("pwd").style.backgroundColor="#99ff99";
		document.getElementById("confirm_password").style.backgroundColor="#99ff99";
		alert("Επιτυχής ολοκλήρωση εγγραφής");
		document.getElementById("register").submit();
		}
		else{
		alert("Ελέγξτε τα στοιχεία σας");
		}
	}
	document.getElementById("bttn").onclick= function(){ClickMe()};
		
	function ResFunction() {
        window.location.reload();
    }
 
	</script>
 </body>
 </html>