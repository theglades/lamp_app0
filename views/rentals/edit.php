<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rentals</title>
  </head>
  <body>
    <div class="container">
      <h1>Rentals</h1>

      <form>
        <div class="form-group">
          <label for="rental_name">Name</label>
          <input type="text" class="form-control" id="create_rental_name" placeholder="Enter rental name">
        </div>
        <div class="form-group">
          <label for="rental_description">Description</label>
          <textarea class="form-control" id="create_rental_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
