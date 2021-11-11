
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

      <div>
        <div class="form-group">
          <label for="">Name</label>
          <h4><?php $category->name ?></h4>
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <div class="">
            <?php $category->description ?>
          </div>
        </div>
      </div>
    </div>

    <?php include("templates/footer.php"); ?>
  </body>
</html>
