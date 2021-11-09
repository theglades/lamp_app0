
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Articles</title>
  </head>
  <body>
    <div class="container">
      <h1>Article</h1>

      <form action="/articles/edit/{$article->id}" method="POST">
        <div class="form-group" >
          <label for="article_title">Title</label>
          <input type="text" class="form-control" id="create_article_title" placeholder="Enter article title">
        </div>
        <div class="form-group">
          <label for="article_content">Content</label>
          <textarea class="form-control" id="create_article_content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
