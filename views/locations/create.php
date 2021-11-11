<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Locations</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <h1>Locations</h1>

      <form action="/locations/create" method="POST">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="create_location_name" placeholder="Enter location name">
        </div>
        <div class="form-group">
          <label for="category_description">Description</label>
          <textarea class="form-control" id="create_location_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
