<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>People</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <h1>People</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Email-Address</th>
        <th>Phone-Number</th>
        <th>Username</th>
      </tr>
      <?php foreach($participants as $participant){ ?>
        <tr>
          <td><?php $participant->id ?></td>
          <td><?php $participant->last_name ?></td>
          <td><?php $participant->first_name ?></td>
          <td><?php $participant->email_address ?></td>
          <td><?php $participant->phone_number ?></td>
          <td><?php $participant->username ?></td>
        </tr>
      <?php } ?>
    </table>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
