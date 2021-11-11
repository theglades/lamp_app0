<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Services</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <h1>Services</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
      <?php foreach($services as $service){ ?>
        <tr>
          <td><?php $service->id ?></td>
          <td><?php $service->name ?></td>
          <td><?php $service->description ?></td>
        </tr>
      <?php } ?>
    </table>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
