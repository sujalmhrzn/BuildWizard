<?php
require_once("../nav.php");
require_once("../db.php");
function fav($conn,$x,$y)
{
    
    $uid=$_SESSION["uid"];
    if($x)
    {
        $pid = $y;
        $query="INSERT INTO favourites(pid,uid) VALUES('$pid','$uid');";
        mysqli_query($conn,$query);
    }
}           
fav($conn,isset($_POST['motherboard']),$_POST['motherboard']);
fav($conn,isset($_POST['cpu']),$_POST['cpu']);
fav($conn,isset($_POST['cooler']),$_POST['cooler']);
fav($conn,isset($_POST['ram']),$_POST['ram']);
fav($conn,isset($_POST['gpu']),$_POST['gpu']);
fav($conn,isset($_POST['storage']),$_POST['storage']);
fav($conn,isset($_POST['psu']),$_POST['psu']);
fav($conn,isset($_POST['case']),$_POST['case']);

?>
<h1 style="height: 60vh;display: flex;justify-content: center;align-items: center;">Successfully Added</h1>
<?php
    require_once("../footer.php");
    ?>
