# be
{Setup Guide to run BuildWizard Locally}
Step 1:DOWNLOAD :
    (a)XAMPP
    (b)Operating System that support XAMPP.
    (c)Internet Connection for CDN libraries.
    (d)Project Files Cloned from Git Hub.
Step 2:Clone Repo in htdocs/
Step 3:git.clone https://github.com/sujalmaharjan/BuildWizard
Step 4:Open PhpMyAdmin http://localhost/phpmyadmin
Step 5:Create Database BuildWizard
Step 6:Import Database sql file from folder cloned using Import button located in navbar.
Step 7:Open XAMPP Control Panel.
Step 8:Start Apache and MySQL Servers.

{MySQL Connection in our Build Wizard PHP}
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "BuildWizard";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    
