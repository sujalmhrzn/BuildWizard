
<?php session_start();
if(isset($_SESSION["uid"]))
{
    unset($_SESSION["uid"]);
    session_destroy();
    header("Location:../home");
}
else{
    header("Location:../sign-in");
}
?>