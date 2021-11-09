
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comments</title>
  </head>
  <body>
    <div class="container">
      <h1>Comment</h1>

      <div>
        <div class="form-group">
          <label for="">Comment</label>
          <div>
            <?php $comment->comment ?>
          </div>
        </div>
        <div class="form-group">
          <label for="">By</label>
          <h4><?php $participant->username ?></h4>
        </div>
      </div>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
