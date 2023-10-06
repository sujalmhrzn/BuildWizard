    
<?php session_start();
if(isset($_SESSION["uid"]))
{
    require_once("./user_compo/navbar.php");
    require_once("./user_compo/favourite.php");
?>
<?php
}
else{
    header("Location:../sign-in");
}
?>