<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Locations</title>
  </head>
  <body>
    <h1>Locations</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
      <?php foreach($locations as $location){ ?>
        <tr>
          <td><?php $location->id ?></td>
          <td><?php $location->name ?></td>
          <td><?php $location->description ?></td>
        </tr>
      <?php } ?>
    </table>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
