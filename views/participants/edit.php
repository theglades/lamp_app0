<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Participant</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <h1>Edit Participant</h1>

      <form action="/participants/edit/{$participant->id}" method="POST">
        <div class="form-group">
          <label for="">First Name</label>
          <input type="text" class="form-control" id="edit_participant_first_name" placeholder="Enter First Name">
        </div>
        <div class="form-group">
          <label for="">Last Name</label>
          <input type="text" class="form-control" id="edit_participant_last_name" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
          <label for="">Email-Address</label>
          <input type="text" class="form-control" id="edit_participant_email_address" placeholder="Enter Email-Address">
        </div>
        <div class="form-group">
          <label for="">Phone-Number</label>
          <input type="text" class="form-control" id="edit_participant_phone_number" placeholder="Enter Phone-Number">
        </div>
        <div class="form-group">
          <label for="">Desired Username</label>
          <input type="text" class="form-control" id="edit_participant_username" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label for="edit_participant_biography">Biography</label>
          <textarea class="form-control" id="edit_participant_biography" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
