<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Organizations</title>
  </head>
  <body>
    <div class="container">
      <h1>Organizations</h1>

      <div>
        <div class="form-group">
          <label for="">Name</label>
          <h4><?php $organization->name ?></h4>
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <div class="">
            <?php $organization->description ?>
          </div>
        </div>
      </div>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
