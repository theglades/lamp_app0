

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Comment</title>
  </head>
  <body>
    <div class="container">
      <h1>Edit Comment</h1>

      <form action="/comments/edit/{$comment->id}" method="POST">
        <div class="form-group">
          <label for="comment">Edit Comment</label>
          <textarea class="form-control" id="edit_comment_comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
