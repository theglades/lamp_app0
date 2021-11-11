<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Rental</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <h1>Edit Rental</h1>

      <form action="/rentals/edit/{$rental->id}" method="POST">
        <div class="form-group">
          <label for="rental_name">Name</label>
          <input type="text" class="form-control" id="edit_rental_name" placeholder="Enter rental name">
        </div>
        <div class="form-group">
          <label for="rental_description">Description</label>
          <textarea class="form-control" id="edit_rental_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
