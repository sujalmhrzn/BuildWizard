
<?php session_start();
if(isset($_SESSION["uid"]))
{
    header("Location:../userportal");
    exit();
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Sign In</title>
</head>
<body>
    <div class="main">
        <form action="index.php" method="POST">
            <img src="../images/logo-full.png" alt="">
            <?php
                require_once("../db.php");
                if(isset($_POST["email"])&&isset($_POST["password"]))
                {
                    $email=$_POST["email"];
                    $u_password=$_POST["password"];
                    $query="select * from users where u_email='$email';";
                    $result=mysqli_query($conn,$query);
                    $user = mysqli_fetch_assoc($result);
                    if($user)
                    {
                        if($u_password==$user["u_password"])
                        {
                            $_SESSION["uid"]=$user["uid"];
                            header("Location:../userportal");
                            
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
            <input type="email" placeholder="Email" name="email" id="email" required>
            <a class="forgot" href="">Forgot Password</a>
            <input type="password" placeholder="Password" name="password" id="password" required>
            <p>Dont Have a Account? <a href="../sign-up/">Sign Up</a></p>
            <button type="submit">
                Sign In
            </button>
        </form>
    </div>
</body>
</html>