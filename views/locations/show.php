<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Locations</title>
  </head>
  <body>
    <div class="container">
      <h1>Locations</h1>

      <form>
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
