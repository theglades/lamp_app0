<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projects</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <h1>Projects</h1>

      <div>
        <div class="form-group">
          <label for="">Name</label>
          <h4><?php $project->name ?></h4>
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <div class="">
            <?php $project->description ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
