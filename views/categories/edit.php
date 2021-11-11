


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Categories</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <h1>Categories</h1>

      <form action="/categories/edit/{$category->id}" method="POST">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="edit_category_name" placeholder="Enter category name">
        </div>
        <div class="form-group">
          <label for="category_description">Description</label>
          <textarea class="form-control" id="edit_category_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>
  </body>
</html>
