<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php session_start();  
if(isset($_SESSION["admin"]))
{
    require_once("../db.php");
    ?>
    
    <div class="admin-menu">
        <h2>Welcome to Admin Dashboard of Build Wizard</h2>
        <hr><!-- Added title -->
        <a href="./?manage=cpu">Add/Manage CPU</a>
        <a href="./?manage=ram">Add/Manage RAM</a>
        <a href="./?manage=storage">Add/Manage Storage</a>
        <a href="./?manage=gpu">Add/Manage Video-card</a>
        <a href="./?manage=psu">Add/Manage power-supplies</a>
        <a href="./?manage=motherboard">Add/Manage Motherboard</a>
        <a href="./?manage=cooler">Add/Manage Cooler</a>
        <a href="./?manage=case">Add/Manage cpu-cases</a>
        <a href="logout.php">Logout</a>
    </div>
    <?php
    if(!empty($_POST['name']))
    {
        $name=$_POST['name'];
        $description=$_POST['description'];
        $max=$_POST['max'];
        $min=$_POST['min'];
        $category=$_POST['category'];
        $query="INSERT INTO product(name,description,max,min,category) VALUES('$name','$description',$max,$min,'$category');";
        mysqli_query($conn,$query);
        
        
        $query="SELECT * FROM product ORDER BY pid DESC;";
        $res=mysqli_query($conn,$query);
        $row=$res->fetch_assoc();
        $pid=$row['pid'];
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
            if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] === UPLOAD_ERR_OK) {
                
                $uploadDir = "../uploads/";
        
                
                $filename = $pid.".jpg";
        
                if (file_exists($filename)) {
                    unlink($destinationPath);
                }
                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadDir . $filename)) {
                    echo "File uploaded successfully!";
                } else {
                    echo "Error uploading file.";
                }
            } else {
                echo "No file selected or an error occurred.";
            }
        } 
        echo "<h2 style='color:white;text-align:center'>Added Sucessfully</h2>";
    }
  ?>
    <!-- nav bar -->
    
    <!-- body -->
    <?php
    if(!empty($_GET["manage"]))
    {?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Add Product</h3>
                <form action="index.php" method="POST" id="productForm" enctype="multipart/form-data">
                <input type="hidden" name="category" value="<?php echo $_GET["manage"];?>">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="name" required placeholder="Product Title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required placeholder="Product Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="minAmount">Minimum Amount:</label>
                        <input type="number" class="form-control" id="minAmount" name="min" required placeholder="Minimum Amount">
                    </div>
                    <div class="form-group">
                        <label for="maxAmount">Maximum Amount:</label>
                        <input type="number" class="form-control" id="maxAmount" name="max" required placeholder="Maximum Amount">
                    </div>
                    <div class="form-group">
                        <label for="photo" >Product Photo:</label>
                        <input type="file" accept=".jpg" class="form-control" id="photo" name="photo">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Product List</h3>
                <div class="product-list">
                    <?php
                    $category=$_GET['manage'];
                    $query="SELECT * FROM product WHERE category='$category' ORDER BY pid DESC;";
                    $res=mysqli_query($conn,$query);
                    $products=array();
                    while($row=$res->fetch_assoc())
                    {
                        $products[]=$row;
                    }
                    foreach($products as $product)
                    {
                    ?>
                    <div class="product-card">
                        <div>
                            <img width="50px" src="../uploads/<?php echo $product['pid']; ?>.jpg" alt="">
                            <strong><?php echo $product['name']; ?></strong><br>
                            Description: <?php echo $product['description'];?><br>
                            Min Amount: <?php echo $product['min'];?><br>
                            Max Amount: <?php echo $product['max'];?>
                        </div>
                        <div class="delete-icon" onclick="removeProduct(<?php echo $product['pid'];?>)"><i class="fas fa-times"></i></div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php  
    }else{
        echo "<h1>Select From Menu</h1>";
    }
    ?>
    <!-- Add Bootstrap JS and jQuery scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="script.js">
        
    </script>
    <?php  
    }else{
        header("Location:signin.php");
    }
    ?>
</body>
</html>