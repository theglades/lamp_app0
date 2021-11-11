<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Organizations</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <h1>Organizations</h1>

      <form action="/organizations/create" method="POST">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="create_organization_name" placeholder="Enter organization name">
        </div>
        <div class="form-group">
          <label for="organization_description">Description</label>
          <textarea class="form-control" id="create_location_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
