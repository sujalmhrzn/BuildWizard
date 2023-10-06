<?php
require_once("../db.php");
    $min=0;
    $max=0;
    $dataArray = $_GET['data'];
    foreach($dataArray as $pid)
    {
        if(!empty($pid))
        {
            $query="SELECT * FROM product WHERE pid=$pid;";
            $res=mysqli_query($conn,$query);
            $row=$res->fetch_assoc();
            $min+=$row['min'];
            $max+=$row['max'];
        }

    }
    echo "The Estimated Price is between : NRS.".$min." to NRS.".$max;
?>