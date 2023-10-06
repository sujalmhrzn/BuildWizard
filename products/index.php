<?php
    require_once("../nav.php");
    require_once("../db.php");
    if(!empty($_GET['component']))
    {
    $category=$_GET['component'];
    $query="SELECT * FROM product WHERE category='$category';";
    $res=mysqli_query($conn,$query);
    $products=array();
    while($row=$res->fetch_assoc())
    {
        $products[]=$row;
    }
    }
    else{
        $search=$_GET['search'];
        $query="SELECT * FROM product WHERE name LIKE '%$search%';";
        $res=mysqli_query($conn,$query);
        $products=array();
        while($row=$res->fetch_assoc())
        {
            $products[]=$row;
        } 
    }
    ?>
    <link rel="stylesheet" href="style.css">
 <!-- Product Grid -->
 <div class="product-container">
    <?php 
    if(!empty($products))
    {
    foreach ($products as $product) {
        echo  '<a class="product-card" href="../product/?pid='.$product["pid"].'">
        <div class="product-image"><img style="width:inherit;" src="../uploads/'.$product["pid"].'.jpg"/></div>
        <div class="product-title">'.$product["name"].'</div>
        <div class="product-price">NRS.'.$product["min"].' - NRS.'.$product["max"].'</div>
        </a>';

    } 
    }else{
        echo "No Products";
    }
    
    ?>
        

    </div>
    <?php
    require_once("../footer.php");
    ?>