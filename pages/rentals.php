<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rentals</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <h1>Rentals</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
      <?php foreach($rentals as $rental){ ?>
        <tr>
          <td><?php $rental->id ?></td>
          <td><?php $rental->name ?></td>
          <td><?php $rental->description ?></td>
        </tr>
      <?php } ?>
    </table>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
