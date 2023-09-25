<?php include("ar-header.php"); ?>
<?php
// Get the product name from the URL parameter
$productName = $_GET['id'];
$file = 'products.json';
$flag=true;
// Check if the file exists
if (file_exists($file)) {
    // Read the file contents
    $contents = file_get_contents($file);

    // Check if the contents are not empty
    if ($contents !== false) {
        // Decode the JSON data into an associative array
        $productData = json_decode($contents, true);

        // Check if JSON decoding was successful
        if ($productData !== null) {
            // Get the first element from the product data
           # $firstProduct = reset($productData);
foreach($productData as $firstProduct)
{
            // Check if there is a first element
            if ($firstProduct !== false) {
                // Check if the ID of the first element is 1
                if (isset($firstProduct['id']) && $firstProduct['id'] == $productName) {
                    // The ID is 1
                  
  echo"<div class='data-of-product'><h2>".$firstProduct['name'] ."</h2><p>". $firstProduct['description'] ."</p><ul >";
         if($firstProduct["list"]!=null)           
        foreach ($firstProduct['list'] as $item) {
          echo "<li>$item</li><br>";
        }
      echo"
    </ul>
  </div>";  echo "<img id='photo' src=images/" . $firstProduct['image'] ." alt='Product Photo'>";
                    $flag=false;
                    break;
                } 
            } else {
                echo "No products found in the JSON file.";
            }}if($flag){

            
            
            echo "<center >we not have ID $productName<br>ERROR 404<br><a href='index.php' class='btn btn-primary' style='margin: 50px 0 100px 0'>back to Home</a></center>";


        }
        } else {
            echo "Failed to decode the JSON file.";
        }
    } else {
        echo "Failed to read the file contents.";
    }
} else {
    echo "The JSON file does not exist.";
}

/*
// Read the contents of the JSON file
$file = 'products.json';
$contents = file_get_contents($file);

// Decode the JSON data into an associative array
$productData = json_decode($contents);

// Search for the product by name
$productFound = false;
$product = null;

foreach ($productData as $productEntry) {
    if ($productEntry['id'] == $productName) {
        $productFound = true;
        $product = $productEntry;
        echo $productEntry;
        break;
    }else echo '<p>' .$productEntry['id'].' <p>';
}

// Display the product details if found, otherwise show an error message
if ($productFound) {
  echo "<img id='photo' src=images/" . $productFound['image'] ." alt='Product Photo'>";
  echo"<div class='data-of-product'><h2>".$productFound['name'] ."</h2><p>". $productFound['description'] ."</p><ul>";
        foreach ($product['list'] as $item) {
          echo "<li>$item</li>";
        }
      echo"
    </ul>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var photo = document.getElementById('photo');
      var dataOfProduct = document.querySelector('.data-of-product');

      photo.classList.add('show');
      dataOfProduct.classList.add('show');
    });";}




else {
    echo "Product not found.";
}*/
?>

<?php include("ar-footer.php"); ?>