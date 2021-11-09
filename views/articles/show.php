
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Articles</title>
  </head>
  <body>
    <div class="container">
      <h1>Articles</h1>

      <div>
        <div class="form-group">
          <label for="">Title</label>
          <h4><?php $article->title ?></h4>
        </div>
        <div class="form-group">
          <label for="">Content</label>
          <div class="">
            <?php $article->content ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
