<?php
require_once("../db.php");
if(!empty($_POST["pid"]))
{
    $pid=$_POST['pid'];
    $query="DELETE FROM product WHERE pid=$pid;";
    if(mysqli_query($conn,$query))
    {
        echo "success";
        unlink("../uploads/".$pid.".jpg");
    }
}
?>