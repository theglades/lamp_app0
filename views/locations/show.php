<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Locations</title>
  </head>
  <body>
    <div class="container">
      <h1>Locations</h1>

      <div>
        <div class="form-group">
          <label for="">Name</label>
          <h4><?php $location->name ?></h4>
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <div class="">
            <?php $location->description ?>
          </div>
        </div>
      </div>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
