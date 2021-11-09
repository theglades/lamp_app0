
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Job-Listings</title>
  </head>
  <body>
    <div class="container">
      <h1>Job-Listings</h1>

      <form>
        <div class="form-group">
          <label for="">Title</label>
          <h4><?php $job_listing->title ?></h4>
        </div>
        <div class="form-group">
          <label for="">Content</label>
          <div class="">
            <?php $job_listing->content ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
