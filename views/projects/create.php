<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projects</title>
  </head>
  <body>
    <div class="container">
      <h1>Projects</h1>

      <form action="/projects/create" method="POST">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="create_project_name" placeholder="Enter product name">
        </div>
        <div class="form-group">
          <label for="product_description">Description</label>
          <textarea class="form-control" id="create_project_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
