<?php 
require 'inc/login.php';
?>

<!DOCTYPE html> 
<html> 
<head>
  <title>Login für Koordinatoren</title>  
  <link rel="icon" href="/images/bmw_favicon.ico" type="image/vnd.microsoft.icon">
  <!-- Verlinkung zum Icon -->
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
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Abschicken">
</form> 
</body>
</html>