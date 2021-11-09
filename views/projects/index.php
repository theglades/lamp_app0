<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projects</title>
  </head>
  <body>
    <h1>Projects</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
      <?php foreach($projects as $project){ ?>
        <tr>
          <td><?php $project->id ?></td>
          <td><?php $project->name ?></td>
          <td><?php $project->description ?></td>
        </tr>
      <?php } ?>
    </table>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
