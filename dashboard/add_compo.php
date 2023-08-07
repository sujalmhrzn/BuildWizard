<!DOCTYPE html>
<html>
<head>
  <title>Build Wizard - PC Building Platform</title>
  <link rel="stylesheet" href="add_compo.css">
  <style>
  
  </style>
</head>
<body>


  <div class="container">
  <?php require_once("./dashboard/sidebar.php");?>
  <?php
require_once("../../dbbe.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$rid= $_SESSION["uid"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $partsName = $_POST["parts-name"];
    $partsCategory = $_POST["parts-category"];
    $partsDescription = $_POST["parts-description"];
    $partsPrice = $_POST["parts-price"];
    
    echo $rid;
    $imageData = file_get_contents($_FILES["parts-pictures"]["tmp_name"]);
    $imageData = $conn->real_escape_string($imageData);

    $sql = "INSERT INTO parts (pid,parts_name, parts_category , description, price, picture)
            VALUES ('$pid','$partsName', '$partsCategory', '$partsDescription', $partsPrice, '$imageData')";

    if ($conn->query($sql) === TRUE) {
        echo "parts added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
    <div class="content">
      <div class="add-parts-form">
        <h2>Add parts</h2>
        <form action="add_parts.php" method="POST" enctype="multipart/form-data">

          <label for="parts-name">parts Name:</label>
          <input type="text" id="parts-name" name="parts-name" required>
          
          <label for="parts-category">parts Category:</label>
          <select id="parts-category" name="parts-category" required>
            <option value="">Select Category</option>
            <option value="motherboard">MotherBoardt</option>
            <option value="cpu">CPU</option>
            <option value="cpu-cooler">CPU Cooler</option>
            <option value="memory">Memory</option>
            <option value="storage">Storage</option>
            <option value="gpu">Graphics Card</option>
            <option value="case">Case</option>
            <option value="powersupply">PowerSupply</option>
            <option value="monitor">Monitor</option>
            <option value="peripherals">Peripherals</option>
          </select>
          
          <label for="parts-description">Description:</label>
          <textarea id="parts-description" name="parts-description" rows="6" cols="100" required></textarea>
          
          <label for="parts-price">Price:</label>
          <input type="number" id="parts-price" name="parts-price" step="0.01" required>
          
          <label for="parts-pictures">Pictures:</label>
          <input type="file" id="parts-pictures" name="parts-pictures" accept="image/*" multiple required>
          
          <button type="submit">Add parts</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>