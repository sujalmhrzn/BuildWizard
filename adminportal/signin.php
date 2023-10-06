
<?php session_start();
if(isset($_SESSION["admin"]))
{
    header("Location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<?php
    if(isset($_POST["email"])&&isset($_POST["password"]))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
        if($email==="admin@buildwizard.com")
        {
            if($password=="admin123")
            {
                $_SESSION["admin"]="logged_in";
                header("Location:index.php");
                
            }
            else{
                echo "<p style='color:red;'>PASSWORD INCORRECT</p>";
            }
        }
        else{
            echo "<p style='color:red;'>INCORRECT EMAIL</p>";
        }
    }

    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Sign In</title>
</head>
<body>
    <div class="main">
        <form action="signin.php" method="POST">
            <img src="../images/logo-full.png" alt="">
            
            <input type="email" placeholder="Email" name="email" id="email" required>
            <br>
            <input type="password" placeholder="Password" name="password" id="password" required>
            <br>
            <button type="submit">
                Sign In
            </button>
        </form>
    </div>
</body>
</html>