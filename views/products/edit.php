<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <h1>Products</h1>

      <form action="/products/edit/{$product->id}" method="POST">
        <div class="form-group">
          <label for="product_name">Name</label>
          <input type="text" class="form-control" id="create_product_name" placeholder="Enter product name">
        </div>
        <div class="form-group">
          <label for="product_description">Description</label>
          <textarea class="form-control" id="create_product_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
