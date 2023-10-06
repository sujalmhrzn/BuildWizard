<?php
    require_once("../nav.php");
    require_once("../db.php");
    if(!empty($_GET['pid']))
    {
    $pid=$_GET['pid'];
    $query="SELECT * FROM product WHERE pid='$pid';";
    $res=mysqli_query($conn,$query);
    $row=$res->fetch_assoc();
    }
    else{
        exit();
    }
    ?>
    <link rel="stylesheet" href="style.css">
    <?php if(!empty(($row["name"]))){ ?>
    <div class="product-container" style="margin-bottom:100px;">
        <!-- Product Image -->
        <img class="product-image" width="200px" src="../uploads/<?php echo $row['pid']; ?>.jpg" alt="Product Image">

        <!-- Product Title -->
        <div class="product-title"><?php echo $row["name"];?></div>

        <!-- Product Description -->
        <div class="product-description">
        <?php echo $row["description"];?>
        </div>

        <!-- Product Price -->
        <div class="product-price">Range of : NRS <?php echo $row["min"];?> to NRS <?php echo $row["max"];?></div>
        <?php 
        if(isset($_SESSION['uid'])){
        $uid=$_SESSION['uid'];
        $query="SELECT * FROM favourites WHERE pid='$pid'AND uid='$uid';";
        $res=mysqli_query($conn,$query);
        $row_2nd=$res->fetch_assoc();
        
        if(!isset($row_2nd["pid"])){ ?>
        <button class="add-to-cart-button" onclick="addToFavourites(<?php echo $row['pid'];?>)">Add to Favourites</button>
        <?php } }?>
    </div>
        <?php } ?>
        <script src="script.js"></script>
    <?php
    require_once("../footer.php");
    ?>
