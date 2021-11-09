
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Locations</title>
  </head>
  <body>
    <div class="container">
      <h1>Location</h1>

      <form action="/locations/edit/{$location->id}" method="POST">
        <div class="form-group">
          <label for="location_name">Name</label>
          <input type="text" class="form-control" id="location_name" placeholder="Enter location name">
        </div>
        <div class="form-group">
          <label for="location_description">Description</label>
          <textarea class="form-control" id="location_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
