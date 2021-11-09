<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Organizations</title>
  </head>
  <body>
    <h1>Organizations</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
      <?php foreach($organizations as $organization){ ?>
        <tr>
          <td><?php $organization->id ?></td>
          <td><?php $organization->name ?></td>
          <td><?php $organization->description ?></td>
        </tr>
      <?php } ?>
    </table>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
