<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign up</title>
</head>
<body>
    <div class="main">
        <form action="sign-up.php" method="POST">

            <img src="./images/logo-full.png" alt="Build wizard ko logo">
            <?php
                require_once("db.php");
                if(isset($_POST["email"])&&isset($_POST["password"]))
                {
                        if($_POST["password"]==$_POST["c_password"])
                        {
                            $u_email=$_POST["email"];
                            $u_name=$_POST["user"];
                            $u_password=$_POST["password"];
                            if(strlen($u_password)>=8 && strlen($u_password)<=10 ){
                                $query="INSERT INTO users (u_name, u_password, u_email)
                            VALUES('$u_name', '$u_password', '$u_email');";
                            mysqli_query($conn,$query);
                            header("Location: sign-in.php"); 
                            }else{
                                echo "<p style='color:red;'>MINIMUN REQUIRED 8 CHARACTERS</p>";
                            }
                    }
                    else{
                        echo "<p style='color:red;'>ENTER SAME PASSWORD</p>";
                    }
                }

                ?>
            <input type="user" placeholder="Username" name="user" id="user" required><br>
            <input type="email" placeholder="Email" name="email" id="email" required><br>
            <input type="password" placeholder="Password" name="password" id="password" required>
           <br>
           <input type="password" placeholder="Confirm Password" name="c_password" id="c_password" required>
           <br><br>
            <button type="submit">
                sign up
            </button>
            <p>Have an account? <a href="sign-in.php" id="sign-in.php">Login</a></p>
        </form>
    </div>
</body>
</html>