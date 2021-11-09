
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comments</title>
  </head>
  <body>
    <div class="container">
      <h1>Comment</h1>

      <form>
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
