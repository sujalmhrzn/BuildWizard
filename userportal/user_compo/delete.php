<?php
session_start();
require_once("../../db.php");
$uid=$_SESSION["uid"];
$pid=$_POST["pid"];
$query="DELETE FROM favourites WHERE uid = $uid AND pid=$pid;";
mysqli_query($conn,$query);

?>