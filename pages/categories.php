<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Categories</title>
    <?php include("templates/header_assets.php"); ?>
  </head>
  <body>
    <h1>Categories</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
      <?php foreach($categories as $category){ ?>
        <tr>
          <td><?php $category->id ?></td>
          <td><?php $category->name ?></td>
          <td><?php $category->description ?></td>
        </tr>
      <?php } ?>
    </table>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
