<?php
  if($_GET["request"] == "edit_participant"){
    $id = $_GET["participant_id"]
    $request = $_POST

    try {
      $sql = $pdo->query("SELECT * FROM participants WHERE id=?");
      $stmt= $pdo->prepare($sql);
      $stmt->execute([$request["participant_id"]]);

      //return true;
      //print_r("Participants table entry entered successfully");
    //  die();
    } catch(Exception $e) {
      print_r('Message: ' .$e->getMessage());

      //return false;
      print_r("Failed to enter participants table successfully");
    //  die();
    }

    //header("Location: participants.php");
    //die();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Participant</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <br>
      <h1>Edit Participant</h1>
      <br>

      <form action="participants.php?request=update_edited_participant" method="POST">
        <input type="hidden" class="" id="edit_participant_id" name="participant_id" value="<?php $participant["participant_id"] ?>">
        <div class="form-group">
          <label for="">First Name</label>
          <input type="text" class="form-control" id="edit_participant_first_name" name="first_name" value="<?php $participant["first_name"] ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="">Last Name</label>
          <input type="text" class="form-control" id="edit_participant_last_name" name="last_name" value="<?php $participant["last_name"] ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="">Email-Address</label>
          <input type="text" class="form-control" id="edit_participant_email_address" name="email_address" value="<?php $participant["email_address"] ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="">Phone-Number</label>
          <input type="text" class="form-control" id="edit_participant_phone_number" name="phone_number" value="<?php $participant["phone_number"] ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" class="form-control" id="edit_participant_username" name="username" placeholder="Enter Username" value="<?php $participant["username"] ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="create_participant_biography">Biography</label>
          <textarea class="form-control" id="create_participant_biography" name="biography"  rows="3"><?php $participant["biography"] ?></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
<?php
}
?>
<?php
  if($_GET["request"] == "update_edited_participant"){
    $id = $_GET["participant_id"]
    $request = $_POST

    try {
      $sql = "UPDATE participants SET first_name=?, last_name=?, email_address=?, phone_number=?, username=?, biography=? WHERE id=?";
      $stmt= $pdo->prepare($sql);
      $stmt->execute([$request["first_name"], $request["last_name"], $request["email_address"], $request["phone_number"], $request["username"], $request["biography"], $request["participant_id"]]);

      //return true;
      print_r("Participants table entry updated successfully");
    //  die();
    } catch(Exception $e) {
      print_r('Message: ' .$e->getMessage());

      //return false;
      print_r("Failed to update participants table successfully");
    //  die();
    }

    header("Location: participants.php");
    die();
?>
<?php
  $stmt = $pdo->query("SELECT * FROM participants");
  $participants = $stmt->fetchAll();

  // echo "<pre>";
  // var_dump($participants);
  // echo "</pre>";
?>

<?php
  if($_GET["request"] == "post_created_participant"){
?>
  <?php

  $request = $_POST;

  try {
    $sql = "INSERT INTO participants (first_name, last_name, email_address, phone_number, username, biography) VALUES (?,?,?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$request["first_name"], $request["last_name"], $request["email_address"], $request["phone_number"], $request["username"], $request["biography"]]);

    //return true;
    print_r("Participants table entry entered successfully");
  //  die();
  } catch(Exception $e) {
    print_r('Message: ' .$e->getMessage());

    //return false;
    print_r("Failed to enter participants table successfully");
  //  die();
  }

  header("Location: participants.php");
  die();
  ?>

<?php
  die();
}
?>

<?php
  if($_GET["request"] == "create_participant"){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Participant</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <br>
      <h1>Create Participant</h1>
      <br>

      <form action="participants.php?request=post_created_participant" method="POST">
        <div class="form-group">
          <label for="">First Name</label>
          <input type="text" class="form-control" id="create_participant_first_name" name="first_name" placeholder="Enter First Name">
        </div>
        <br>
        <div class="form-group">
          <label for="">Last Name</label>
          <input type="text" class="form-control" id="create_participant_last_name" name="last_name" placeholder="Enter Last Name">
        </div>
        <br>
        <div class="form-group">
          <label for="">Email-Address</label>
          <input type="text" class="form-control" id="create_participant_email_address" name="email_address" placeholder="Enter Email-Address">
        </div>
        <br>
        <div class="form-group">
          <label for="">Phone-Number</label>
          <input type="text" class="form-control" id="create_participant_phone_number" name="phone_number" placeholder="Enter Phone-Number">
        </div>
        <br>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" class="form-control" id="create_participant_username" name="username" placeholder="Enter Username">
        </div>
        <br>
        <div class="form-group">
          <label for="create_participant_biography">Biography</label>
          <textarea class="form-control" id="create_participant_biography" name="biography"  rows="3"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
<?php
  die();
}
?>
<?php
  if(true) {
?>
<?php
  if($_GET["render"] == "json"){
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(200);
    echo json_encode($participants);
    die();
?>
<?php
} else {
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Participants</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">

      <br>

      <h1>Participants</h1>

      <br>


        <?php
          if(($_GET["format"] == "table") || (($_GET["format"] == ""))){
        ?>
        <table class="table table-striped">
          <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email-Address</th>
            <th>Phone-Number</th>
            <th>Username</th>
          </tr>
        <?php if($participants != NULL){ ?>
          <?php foreach($participants as $participant){ ?>
            <?php
            // echo "<pre>";
            // var_dump($participants);
            // echo "</pre>";
            ?>

            <tr>
              <td><a href='?render=static&id={$participant["id"]}'><?php print($participant["id"]) ?></a></td>
              <td><?php print($participant["last_name"]) ?></td>
              <td><?php print($participant["first_name"]) ?></td>
              <td><?php print($participant["email_address"]) ?></td>
              <td><?php print($participant["phone_number"]) ?></td>
              <td><?php print($participant["username"]) ?></td>
            </tr>
          <?php } ?>
          <?php } else { ?>
            <tr>
              <td>Nothing to see here.</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
        <?php } ?>
      </table>

        <?php
        } else if($_GET["format"] == "cards") {
        ?>

        <div class="row">
        <?php if($participants != NULL){ ?>
          <?php foreach($participants as $participant){ ?>
            <?php
            // echo "<pre>";
            // var_dump($participants);
            // echo "</pre>";
            ?>

            <div class="col-12 col-md-4" style="float:left;padding:1rem;">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="..." alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><em><?php print($participant["first_name"]) ?> <?php print($participant["last_name"]) ?></em></p>
                    <p class="card-text"><?php print($participant["username"]) ?></p>
                  </div>
                </div>
            </div>



          <?php } ?>

          <?php } else { ?>
            <div class="">
              Nothing to see here.
            </div>
        <?php } ?>

        <?php
        }
        ?>
      </div>

      <br><br>

      <?php include("templates/footer.php"); ?>

    </div>


  </body>
</html>
<?php
}
?>
