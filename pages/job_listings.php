<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Job-Listings</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <h1>Job-Listings</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
      </tr>
      <?php foreach($job_listings as $job_listing){ ?>
        <tr>
          <td><?php $job_listing->id ?></td>
          <td><?php $job_listing->title ?></td>
          <td><?php $job_listing->content ?></td>
        </tr>
      <?php } ?>
    </table>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
