
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Organizations</title>
  </head>
  <body>
    <div class="container">
      <h1>Organization</h1>

      <form action="/organizations/edit/{$organization->id}" method="POST">
        <div class="form-group">
          <label for="organization_name">Name</label>
          <input type="text" class="form-control" id="organization_name" placeholder="Enter organization name">
        </div>
        <div class="form-group">
          <label for="organization_description">Description</label>
          <textarea class="form-control" id="organization_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
