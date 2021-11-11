<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Comments</title>
    <?php include("templates/header_assets.php"); ?>
  </head>
  <body>
    <h1>Comments</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Comment</th>
      </tr>
      <?php foreach($comments as $comment){ ?>
        <tr>
          <td><?php $comment->id ?></td>
          <td><?php $comment->comment ?></td>
        </tr>
      <?php } ?>
    </table>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
