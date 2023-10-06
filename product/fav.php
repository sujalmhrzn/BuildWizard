<?php
require_once("../db.php");
session_start();
$pid=$_POST["pid"];
$uid=$_SESSION["uid"];
$query="INSERT INTO favourites(pid,uid) VALUES('$pid','$uid');";
mysqli_query($conn,$query);
?>