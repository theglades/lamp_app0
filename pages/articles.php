<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Articles</title>
    <?php include("templates/header_assets.php"); ?>
  </head>
  <body>
    <h1>Articles</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
      </tr>
      <?php foreach($articles as $article){ ?>
        <tr>
          <td><?php $article->id ?></td>
          <td><?php $article->title ?></td>
          <td><?php $article->content ?></td>
        </tr>
      <?php } ?>
    </table>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
