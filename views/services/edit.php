<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Services</title>
  </head>
  <body>
    <div class="container">
      <h1>Services</h1>

      <form action="/services/edit/{$services->id}" method="POST">
        <div class="form-group">
          <label for="service_name">Name</label>
          <input type="text" class="form-control" id="edit_service_name" placeholder="Enter service name">
        </div>
        <div class="form-group">
          <label for="service_description">Description</label>
          <textarea class="form-control" id="edit_service_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
