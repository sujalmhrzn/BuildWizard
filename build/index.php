<?php
    require_once("../nav.php");
    require_once("../db.php");
    $query="SELECT * FROM product ;";
    $res=mysqli_query($conn,$query);
    $products=array();
    while($row=$res->fetch_assoc())
    {
        $products[]=$row;
    } 
    ?>
    <link rel="stylesheet" href="build.css">

    <div class="container mt-5">
        <h2 class="text-center">Select Components for your Build</h2>
        <p class="text-center font-italic">We will provide an estimate for your build.</p>
        <form method="POST" action="fav.php">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                
                    <div class="form-group">
                        <label for="processor1">Select a CPU:</label>
                        <select class="custom-select custom-dropdown" id="cpu" name="cpu" required>
                            <option value="">Select</option>
                            <?php foreach($products as $product)
                            {
                                if($product["category"]==="cpu"){
                                    echo '<option value="'.$product["pid"].'">'.$product["name"].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="processor1">Select a Motherboard:</label>
                        <select class="custom-select custom-dropdown" id="motherboard" name="motherboard" required>
                            <option value="">Select</option>
                            <?php foreach($products as $product)
                            {
                                if($product["category"]==="motherboard")
                                {
                                    
                                    echo '<option value="'.$product["pid"].'">'.$product["name"].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="processor1">Select a Cooler:</label>
                        <select class="custom-select custom-dropdown" id="cooler" name="cooler" required>
                        <option value="">Select</option>
                        <?php foreach($products as $product)
                            {
                                if($product["category"]=="cooler")
                                    echo '<option value="'.$product["pid"].'">'.$product["name"].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="processor1">Select a RAM:</label>
                        <select class="custom-select custom-dropdown" id="ram" name="ram" required>
                            <option value="">Select</option>
                            <?php foreach($products as $product)
                            {
                                if($product["category"]=="ram")
                                    echo '<option value="'.$product["pid"].'">'.$product["name"].'</option>';
                            }
                            ?>
                        </select>
                    </div>
            </div>
            
            <!-- Right Column -->
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="processor5">Select a Video-Card:</label>
                        <select class="custom-select custom-dropdown" id="gpu" name="gpu" required>
                            <option value="">Select</option>
                            <?php foreach($products as $product)
                            {
                                if($product["category"]=="gpu")
                                    echo '<option value="'.$product["pid"].'">'.$product["name"].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="processor1">Select a Storage:</label>
                        <select class="custom-select custom-dropdown" id="storage" name="storage" required>
                            <option value="">Select</option>
                            <?php foreach($products as $product)
                            {
                                if($product["category"]=="storage")
                                    echo '<option value="'.$product["pid"].'">'.$product["name"].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="processor1">Select a power-supplies:</label>
                        <select class="custom-select custom-dropdown" id="psu" name="psu" required>
                            <option value="">Select</option>
                            <?php foreach($products as $product)
                            {
                                if($product["category"]=="psu")
                                    echo '<option value="'.$product["pid"].'">'.$product["name"].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="processor1">Select a cpu-cases:</label>
                        <select class="custom-select custom-dropdown" id="case" name="case" required>
                            <option value="">Select</option>
                            <?php foreach($products as $product)
                            {
                                if($product["category"]=="case")
                                    echo '<option value="'.$product["pid"].'">'.$product["name"].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                
            </div>
        
        </div>
        <div class="text-center">
            <p id="estimate"></p>
            <button type="button" onclick="estimatePrice()" class="estimate btn custom-button">Estimate</button>
            <?php if(isset($_SESSION["uid"]))
            {
            echo '<button type="submit" class="btn custom-button">Add to Favourite</button>';
            }?>
        </div>
        </form>
        
        <br>
    </div>
    <!-- Add Bootstrap JS and jQuery scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Add custom JavaScript to handle form submission -->
    <script src="script.js"></script>

<?php
    require_once("../footer.php");
    ?>