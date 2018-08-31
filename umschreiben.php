<?php 
session_start();
include("connect.php"); 
if(isset($_GET['login'])) {
	$email = $_POST['email'];
	$klasse = $_POST['klassef'];
	


	$befehl1 = "SELECT * FROM schueler_test WHERE email='$email'";
	$row = mysql_fetch_array(mysql_query("SELECT * FROM schueler_test WHERE email='$email'"));
	$klasse_old = $row['klasse'];
	$befehl2 = "REPLACE(klasse, '$klasse_old', '$klasse')";
	$befehl = mysql_query($befehl1 . $befehl2);   
     # $benutzer = mysql_fetch_array($befehl);

}
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>	
</head> 
<body>
 
<?php 
if(isset($errorMessage)) {
	echo $errorMessage;
}
?>
 
<form action="?login=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
klassenaenderung<br>
<input type="password" size="40"  maxlength="250" name="klassef"><br>
 
<input type="submit" value="Abschicken">
</form> 
</body>
</html>