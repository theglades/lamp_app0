<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Participant</title>
  </head>
  <body>
    <div class="container">
      <h1>Show Participant</h1>

      <div>
        <div class="form-group">
          <label for="">First Name</label>
          <h5><?php $participant->first_name ?></h5>
        </div>
        <div class="form-group">
          <label for="">Last Name</label>
          <h5><?php $participant->last_name ?></h5>
        </div>
        <div class="form-group">
          <label for="">Email-Address</label>
          <h5><?php $participant->email_address ?></h5>
        </div>
        <div class="form-group">
          <label for="">Phone-Number</label>
          <h5><?php $participant->phone_number ?></h5>
        </div>
        <div class="form-group">
          <label for="">Desired Username</label>
          <h5><?php $participant->username ?></h5>
        </div>
        <div class="form-group">
          <label for="show_participant_biography">Biography</label>
          <div><?php $participant->biography ?></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
