<!-- Link to login.php -->
<?php 
require 'inc/login.php';
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Login für Koordinatoren</title>  
    <link rel="stylesheet" href="D:\Google Drive\Informatik\XAMPP\htdocs/PHPWorkspaceVSCode/stylesheet.css" type="text/css">
    <link rel="icon" href="/images/bmw_favicon.ico" type="image/vnd.microsoft.icon">
    <!-- Link to icon -->
    </head> 
    <header>
            <div class="Banner">
                <div class="BannerContent">
                    <div class="HeaderLogoBar">
                        <img id="HeaderLogo" class="HeaderLogoBMWGroup" src="/images/bmwgroup-logo.png" alt="BMWGroup Logo">
                        <img id="HeaderLogo" class="HeaderLogoNext" src="/images/signet.png" alt="Next100">
                        <img id="HeaderLogo" class="HeaderLogoBMW" src="/images/bmw-logo.png" alt="BMW Logo">
                        <img id="HeaderLogo" class="HeaderLogoMINI" src="/images/mini-logo.jpg" alt="MINI Logo">
                        <img id="HeaderLogo" class="HeaderLogoRR" src="/images/rollsroyce-logo.png" alt="RollsRoyce Logo">
                    </div>                    
                    <div class="Navigation">
                        <h5 id="Title">Login</h5>
                        <a id="HomeLink" href="D:/Google Drive/Informatik/XAMPP/htdocs/PHPWorkspaceVSCode/index.html">Home</a>
                    </div>
                </div>
            </div>
            <div id="BannerUnderlay"></div>
        </header>
        <img id="picture" src="..." alt="picture"> <!-- Insert a different picture -->
        <body>

        <!-- Return of the error statement -->
        <?php 
        if(isset($errorMessage)) {
          echo $errorMessage;
        }
        ?>
 
        <form action="?login=1" method="post">
            <div class = "Logintext">E-Mail:<br></div>
                <div class = "Loginpanel"><input type="email" size="40" maxlength="250" name="email"><br><br></div>
 
            <div class = "Logintext">Dein Passwort:<br></div>
                <div class = "Loginpanel"><input type="password" size="40"  maxlength="250" name="passwort"><br></div>
 
        <input id = "SubmtButton" type = "submit" value = "Abschicken">
        </form> 
        </body>
</html>