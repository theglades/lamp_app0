<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rentals</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <h1>Rentals</h1>

      <div>
        <div class="form-group">
          <label for="">Name</label>
          <h4><?php $rental->name ?></h4>
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <div class="">
            <?php $rental->description ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
