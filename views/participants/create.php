<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Participant</title>
  </head>
  <body>
    <div class="container">
      <h1>Create Participant</h1>

      <form action="/organizations/create" method="POST">
        <div class="form-group">
          <label for="">First Name</label>
          <input type="text" class="form-control" id="create_participant_first_name" placeholder="Enter First Name">
        </div>
        <div class="form-group">
          <label for="">Last Name</label>
          <input type="text" class="form-control" id="create_participant_last_name" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
          <label for="">Email-Address</label>
          <input type="text" class="form-control" id="create_participant_email_address" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
          <label for="">Phone-Number</label>
          <input type="text" class="form-control" id="create_participant_phone_number" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
          <label for="">Desired Username</label>
          <input type="text" class="form-control" id="create_participant_username" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
          <label for="create_participant_biography">Description</label>
          <textarea class="form-control" id="create_participant_biography" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
