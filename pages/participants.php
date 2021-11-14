<?php
error_reporting(E_ALL);

//You can also report all errors by using -1
error_reporting(-1);

//If you are feeling old school
ini_set('error_reporting', E_ALL);

?>
<?php
  require($_SERVER['DOCUMENT_ROOT'].'/databases/mysql_connection.php');

  //die();

  // try {
  //   $pdo = new \PDO("sqlite:" . "../databases/database.db");
  // } catch {
  //   echo "Fatal Error."
  // }

?>
<?php
  if($_GET["request"] == "update_edited_participant"){
    //$id = $_GET["participant_id"]
    $request = $_POST;

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

    header("Location: participants.php?request=show_participant&participant_id=".$request['participant_id']);
    die();
  }
?>
<?php
  if(($_GET["request"] == "edit_participant") && ($_GET['participant_id'] != NULL)){
    $id = $_GET["participant_id"];

    try {
      // $stmt = $pdo->query("SELECT * FROM participants");
      // $participants = $stmt->fetchAll();
      $sql = "SELECT * FROM participants WHERE id=:id";
      $stmt= $pdo->prepare($sql);
      $stmt->execute(['id' => $id]);
      $participant = $stmt->fetch();

      //return true;
      print_r("Participants table select entered successfully");
    //  die();
    } catch(Exception $e) {
      print_r('Message: ' .$e->getMessage());

      //return false;
      print_r("Failed to select participants table successfully");
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
        <input type="hidden" class="" id="edit_participant_id" name="participant_id" value="<?php print($participant["id"]) ?>">
        <div class="form-group">
          <label for="">First Name</label>
          <input type="text" class="form-control" id="edit_participant_first_name" name="first_name" value="<?php print($participant["first_name"]) ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="">Last Name</label>
          <input type="text" class="form-control" id="edit_participant_last_name" name="last_name" value="<?php print($participant["last_name"]) ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="">Email-Address</label>
          <input type="text" class="form-control" id="edit_participant_email_address" name="email_address" value="<?php print($participant["email_address"]) ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="">Phone-Number</label>
          <input type="text" class="form-control" id="edit_participant_phone_number" name="phone_number" value="<?php print($participant["phone_number"]) ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" class="form-control" id="edit_participant_username" name="username" placeholder="Enter Username" value="<?php print($participant["username"]) ?>">
        </div>
        <br>
        <div class="form-group">
          <label for="create_participant_biography">Biography</label>
          <textarea class="form-control" id="create_participant_biography" name="biography"  rows="3"><?php print($participant["biography"]) ?></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
<?php
} else if(($_GET["request"] == "edit_participant") && ($_GET['participant_id'] == NULL)) {
  header("Location: participants.php?request=index_of_participants");
  die();
}

?>
<?php
  if($_GET["request"] == "index_of_participants") {

  try {
      $stmt = $pdo->query("SELECT * FROM participants");
      $participants = $stmt->fetchAll();
  } catch (Exception $e) {
    print_r('Message: ' .$e->getMessage());

    //return false;
    print_r("Failed to enter participants table successfully");
    //  die();
  }

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
              <td><a href="?render=static&request=show_participant&participant_id=<?php print($participant["id"]) ?>"><?php print($participant["id"]) ?></a></td>
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

<?php
  die();
}

?>
<?php
  if(($_GET["request"] == "show_participant") && ($_GET["participant_id"] != NULL)){
    $id = $_GET["participant_id"];

    // echo "<pre>";
    // var_dump($id);
    // echo "</pre>";
    // die();
    //die("here we are");

    try {
      // $stmt = $pdo->query("SELECT * FROM participants");
      // $participants = $stmt->fetchAll();
      $sql = "SELECT * FROM participants WHERE id=:id";
      $stmt= $pdo->prepare($sql);
      $stmt->execute(['id' => $id]);
      $participant = $stmt->fetch();

      //return true;
      print_r("Participants table select entered successfully");
    //  die();
    } catch(Exception $e) {
      print_r('Message: ' .$e->getMessage());

      //return false;
      print_r("Failed to select participants table successfully");
    //  die();
    }

    // header("Location: participants.php");
    // die();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show Participant</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <br>
      <h1>Show Participant</h1>
      <br>

      <div>
        <div class="form-group">
          <label for="">First Name</label>
          <h5><?php print($participant["first_name"]) ?></h5>
        </div>
        <br>
        <div class="form-group">
          <label for="">Last Name</label>
          <h5><?php print($participant["last_name"]) ?></h5>
        </div>
        <br>
        <div class="form-group">
          <label for="">Email-Address</label>
          <h5><?php print($participant["email_address"]) ?></h5>
        </div>
        <br>
        <div class="form-group">
          <label for="">Phone-Number</label>
          <h5><?php print($participant["phone_number"]) ?></h5>
        </div>
        <br>
        <div class="form-group">
          <label for="">Username</label>
          <h5><?php print($participant["username"]) ?></h5>
        </div>
        <br>
        <div class="form-group">
          <label for="create_participant_biography">Biography</label>
          <div>
            <?php print($participant["biography"]) ?>
          </div>
        </div>
        <br>
      </div>

      <br><br>

      <h5><a href="?request=edit_participant&participant_id=<?php print($participant["id"]) ?>">Edit Participant</a></h5>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>
<?php
} else if(($_GET["request"] == "show_participant") && ($_GET["participant_id"] == NULL)) {
  header("Location: participants.php?request=index_of_participants");
  die();
?>
<?php
}
?>
