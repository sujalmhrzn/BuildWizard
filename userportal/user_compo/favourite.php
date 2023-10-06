<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="./user_compo/favourite.css">
    
    <?php
    require_once("../db.php");
    $uid=$_SESSION["uid"];
    
    $query="SELECT * FROM favourites WHERE uid = $uid ORDER BY fid DESC;";
    $res=mysqli_query($conn,$query);
    $favs=array();
    while($row=$res->fetch_assoc())
    {
        $pid=$row['pid'];
        $query_product="SELECT * FROM product WHERE pid =$pid;";
        $res_product=mysqli_query($conn,$query_product);
        $product=$res_product->fetch_assoc();
        $favs[]=$product;
    } 
    ?>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Favourite List</h2>
        <div class="product-list">
            <!-- Product cards -->
            <?php foreach($favs as $fav){?>
                <div class="product-card">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="../uploads/<?php echo $fav['pid']?>.jpg" alt="Product 1" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h4><?php echo $fav['name']?></h4>
                            <p><?php echo $fav['description']?></p>
                            <p><strong>Max Price:</strong> <?php echo $fav['max']?></p>
                            <p><strong>Min Price:</strong><?php echo $fav['min']?></p>
                        </div>
                        <div class="col-md-3">
                            <button class="btn remove-button" onclick="removeFav(<?php echo $fav['pid']?>);">Remove</button>
                        </div>
                    </div>
                </div>
            <?php
            }?>

            <!-- Add more product cards as needed -->
        </div>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function removeFav(pid)
        {
            $.ajax({
            url: 'user_compo/delete.php', 
            method: 'POST', 
            data:{
            pid:pid
            },
            success: function (data) {
            location.reload();
            }
            });
        }
    </script>
</body>
</html>