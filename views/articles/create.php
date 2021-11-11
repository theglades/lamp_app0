
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Articles</title>
    <?php include("templates/header_assets.php"); ?>
  </head>
  <body>
    <div class="container">
      <h1>Article</h1>

      <form action="/articles/create" method="POST">
        <div class="form-group">
          <label for="job_listing_title">Title</label>
          <input type="text" class="form-control" id="article_title" placeholder="Enter article title">
        </div>
        <div class="form-group">
          <label for="job_listing_content">Content</label>
          <textarea class="form-control" id="article_content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>
  </body>
</html>
