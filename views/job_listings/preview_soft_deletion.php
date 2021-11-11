<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Job-Listings</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <h1>Job-Listings</h1>

      <form class="form-group" action="/job_listings/preview_soft_deletion/{$job_listings->id}" method="POST">
        <div class="form-group">
          <label for="">Type "YES" to confirm the deletion of this category. Due note, that this operation can be reversed within 3 months. After the 3 month window has elapsed, the category will be permanently deleted.</label>
          <input type="text" class="form-control" id="confirm_soft_deletion_of_comment" placeholder="NO">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
