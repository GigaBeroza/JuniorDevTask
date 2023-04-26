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

    ?>

    <div class="head">
      <h1>Product Add</h1>
    </div>
    <div id="product-form">
      <form class="form" method="post" action="insert-data.php">
        <label for="sku">SKU</label>
        <input type="text" id="sku" name="sku" required /><br /><br />

        <label for="name">Name</label>
        <input type="text" id="name" name="name" required /><br /><br />

        <label for="price">Price ($)</label>
        <input type="number" id="price" name="price" step="0.01" required /><br /><br />

        <label for="productType">Product type</label>
        <select id="productType" name="type">
          <option value="Select">Select an option</option>
          <option value="DVD">DVD</option>
          <option value="Book">Book</option>
          <option value="Furniture">Furniture</option>
        </select><br /><br />

        <div id="typeSpecific">
          <div id="dvdAttributes" class="hidden">
            <div>
              <label for="size">Size (MB):</label>
              <input
                type="number"
                id="size"
                name="dvd_size"
                title="Please, provide size"
                placeholder="Please, provide size"
              
              />
            </div>
          </div>

          <div id="bookAttributes" class="hidden">
            <div>
              <label for="weight">Weight (Kg):</label>
              <input
                type="number"
                id="weight"
                name="book_weight"
                title="Please, provide weight"
                placeholder="Please, provide weight"
              
              />
            </div>
          </div>

          <div id="type-furniture" class="hidden">
            <div class="margin-bot">
              <label for="height">Height:</label>
              <input
                type="number"
                id="height"
                name="furniture_height"
                title="Please, provide height"
                placeholder="Please, provide height"
              
              />
            </div>

            <div class="margin-bot">
              <label for="width">Width:</label>
              <input
                type="number"
                id="width"
                name="furniture_width"
                title="Please, provide width"
                placeholder="Please, provide width"
              
              />
            </div>

            <div class="margin-bot">
              <label for="length">Length:</label>
              <input
                type="number"
                id="length"
                name="furniture_length"
                title="Please, provide length"
                placeholder="Please, provide length"
              
              />
            </div>
          </div>
      </div>


        <div class="submit-container">
          <form  method="POST" action="insert-data.php" action="index.php" >
            <button class="save" type="submit" value="Save">Save</button>
          </form>

          <form action="index.php">
            <button class="cancel" type="submit" value="Cancel">Cancel</button>
          </form>
        </div>
      </form>

    </div>
    <script src="productType.js"></script>
  </body>

  <footer><div>Scandiweb Test assignmet</div></footer>
</html>
