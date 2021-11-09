

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Comment</title>
  </head>
  <body>
    <div class="container">
      <h1>Create Comment</h1>

      <form action="/comments/create" method="POST">
        <div class="form-group">
          <label for="comment">Create Comment</label>
          <textarea class="form-control" id="create_comment_comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
