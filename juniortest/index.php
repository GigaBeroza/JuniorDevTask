
<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="head">
      <h1>Product List</h1>
      <div class="submit-container">
        <form method="POST"  action="add-product.php">
          <button type="submit" class="add" value="Add">Add</button>
        </form>
      </div>
    </div>
    <div class="full-grid">
      <form action="delete.php" method="POST"> 
      <div class="grid-container">
    <?php
      $sql = "SELECT id, sku, name, price, type, dvd_size, book_weight, furniture_height, furniture_width, furniture_length FROM products";
      $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            
          
          
            echo '<div class="grid-item">';
            echo '<input type="checkbox" class="delete-checkbox" name="delete_box[]" value="' . htmlspecialchars($row["id"]) . '"/>';
            echo '<div>' . htmlspecialchars($row["sku"]) . '</div>';
            echo '<div>' . htmlspecialchars($row["name"]) . '</div>';
            echo '<div>' . htmlspecialchars($row["price"]) . ' $' .'</div>';
            

            if ($row["type"] === "dvd") {
                echo '<div>Size: ' . htmlspecialchars($row["dvd_size"]) . ' MB</div>';
            } elseif ($row["type"] === "book") {
                echo '<div>Weight: ' . htmlspecialchars($row["book_weight"]) . ' Kg</div>';
            } elseif ($row["type"] === "furniture") {
                echo '<div>Dimension: ' . htmlspecialchars($row["furniture_height"]) . 'x' . htmlspecialchars($row["furniture_width"]) . 'x'. htmlspecialchars($row["furniture_length"]) . '</div>';
            }

            echo '</div>';
           
        }
    } else {
        echo "No records found";
    }

    $conn->close();

    ?>

          <div class="submit-container">

            <form method="POST" action="delete.php">  
              <button type="submit" name="mass_delete"  id="delete-product-btn" class="delete">Mass Delete</button>
            </form>

            
          </div>

        </div>
      </form>
    </div>
  </body>

  <footer><div>Scandiweb Test assignmet</div></footer>
</html>
