<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build Wizard - PC Building Platform</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../index.css">
</head>

<body>
<header>
        <img src="../images/logo-full.png" alt="logo">
        <form action="../products">
            <div class="search">

                <input type="text" name="search" placeholder="Search Components">
                <input style="width:100px;" type="submit" value="Search">
            </div>
        </form>
        <?php 
        session_start();
        if(!isset($_SESSION["uid"]))
        {
            echo '<a href="../sign-in" class="sign-in">Sign In</a>';
        }
        else{
            echo '<a href="../userportal/" class="sign-in">Portal</a> <a href="../userportal/logout.php" class="sign-in">Sign Out</a>';
        }
        ?>
        
    </header>
        <nav>
            <ul>
                <li><a href="../home">HOME</a></li>
                <li><a href="../build">BUILD</a></li>
                <li><a href="../components">COMPONENTS</a></li>
            </ul>
        </nav>
    </body>
    </html>
