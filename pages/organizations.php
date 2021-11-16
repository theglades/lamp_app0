<?php
error_reporting(E_ALL);

//You can also report all errors by using -1
error_reporting(-1);

//If you are feeling old school
ini_set('error_reporting', E_ALL);

?>
<?php
  require($_SERVER['DOCUMENT_ROOT'].'/databases/mysql_connection.php');
?>
<?php
  if($_GET["request"] == "store_organization"){
    $request = $_POST;

    $organization_id = NULL;
    try {
      $sql = "INSERT INTO organizations (name, description) VALUES (?,?)";
      $stmt= $pdo->prepare($sql);
      $stmt->execute([$request["name"], $request["description"]]);
      $organization_id = $pdo->lastInsertId();

      print_r("Organizations table entry created successfully");

    } catch(Exception $e) {
      print_r('Message: ' .$e->getMessage());

      print_r("Failed to create organizations table successfully");
      die();
    }

    header("Location: organizations.php?request=show_organization&organization_id=".$organization_id);
    die();
  }
?>
<?php
  if(($_GET["request"] == "create_organization")){
    if($_GET["render"] == "json"){
      $data = $_GET;

      $url = 'http://localhost:8004/organizations.php?request=store_organization';

      $json_data = array(
          'name' => $data["name"],
          'description' => $data["description"]
      );

      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($json_data)
          )
      );
      var_dump($options);

      $context  = stream_context_create($options);

      $result = file_get_contents($url, false, $context);

      var_dump($result);
      die();
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Organization</title>
    <?php include("templates/header_assets.php"); ?>
  </head>
  <body>
    <div class="container">
      <br>
      <h1>Create Organization</h1>
      <br>

      <form action="organizations.php?request=store_organization" method="POST">
        <div class="form-group">
          <label for="create_participant_first_name"><h5>Name</h5></label>
          <input type="text" class="form-control" id="create_organization_name" name="name" placeholder="Enter Name">
        </div>
        <br>
        <div class="form-group">
          <label for="create_participant_last_name"><h5>Description</h5></label>
          <input type="text" class="form-control" id="create_organization_description" name="description" placeholder="Enter Description">
        </div>
        <br>
        <div class="form-group">
          <label for="create_participant_phone_number"><h5>Phone-Number</h5></label>
          <input type="text" class="form-control" id="create_participant_phone_number" name="phone_number" placeholder="Enter Phone-Number">
        </div>
        <br>
        <div class="form-group">
          <label for="create_participant_username"><h5>Username</h5></label>
          <input type="text" class="form-control" id="create_participant_username" name="username" placeholder="Enter Username">
        </div>
        <br>
        <div class="form-group">
          <label for="create_participant_biography"><h5>Biography</h5></label>
          <textarea id="create_participant_biography" name="biography"  rows="3"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>
    <script>
      ClassicEditor
          .create( document.querySelector( '#create_participant_biography' ) )
          .then( editor => {
              editor.ui.view.editable.element.style.height = '300px';
          })
          .catch( error => {
              console.error( error );
          } );
    </script>
  </body>
</html>
<?php
  die();
}

?>
<?php
  if($_GET["request"] == "confirm_soft_deletion_of_participant"){
    //$id = $_GET["participant_id"]
    $request = $_POST;

    if($request["confirm_soft_deletion_of_participant"] == "YES"){
      try {
        $sql = "DELETE FROM participants WHERE id=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$request["participant_id"]]);

        //return true;
        print_r("Participants table entry deleted successfully");
      //  die();
      } catch(Exception $e) {
        print_r('Message: ' .$e->getMessage());

        //return false;
        print_r("Failed to delete participants table successfully");
        die();
      }
    } else {
      header("Location: participants.php?request=show_participant&participant_id=".$request['participant_id']);
      die();
    }

    header("Location: participants.php?request=index_of_participants");
    die();
  }
?>
<?php
  if(($_GET["request"] == "preview_soft_deletion_of_participant") && ($_GET['participant_id'] != NULL)){
    $id = $_GET["participant_id"];

    if($_GET["render"] == "json"){
      $data = $_GET;

      $url = 'http://localhost:8004/participants.php?request=confirm_soft_deletion_of_participant';
      //$data = array('key1' => 'value1', 'key2' => 'value2');
      $json_data = array(
          'participant_id' => $id,
          'confirm_soft_deletion_of_participant' => $data['confirm_soft_deletion_of_participant']
      );

      //$json_data = json_encode($json_data);

      // use key 'http' even if you send the request to https://...
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($json_data)
          )
      );

      $context  = stream_context_create($options);

      $result = file_get_contents($url, false, $context);

      var_dump($result);
      die();
    }

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
    <title>Confirm Deletion Of Participant</title>
    <?php include("templates/header_assets.php"); ?>

  </head>
  <body>
    <div class="container">
      <br>
      <h1>Confirm Deletion Of Participant</h1>

      <br>

      <form class="form-group" action="participants.php?request=confirm_soft_deletion_of_participant&participant_id=<?php print($participant["id"]) ?>" method="POST">
        <input type="hidden" class="" id="preview_deletion_of_participant_id" name="participant_id" value="<?php print($participant["id"]) ?>">
        <div class="form-group">
          <label for="">Type "YES" to confirm the deletion of this category. Due note, that this operation can be reversed within 3 months. After the 3 month window has elapsed, the category will be permanently deleted.</label>
          <br><br>
          <input type="text" class="form-control" id="confirm_soft_deletion_of_participant" name="confirm_soft_deletion_of_participant" placeholder="NO">
        </div>

        <br><br>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php include("templates/footer.php"); ?>

  </body>
</html>

<?php
} else if(($_GET["request"] == "preview_soft_deletion_of_participant") && ($_GET['participant_id'] == NULL)) {
  header("Location: participants.php?request=index_of_participants");
  die();
}

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

    if($_GET["render"] == "json"){
      $data = $_GET;

      $url = 'http://localhost:8004/participants.php?request=update_edited_participant';
      //$data = array('key1' => 'value1', 'key2' => 'value2');
      $json_data = array(
          'first_name' => $data["first_name"],
          'last_name' => $data["last_name"],
          'email_address' => $data["email_address"],
          'phone_number' => $data["phone_number"],
          'username' => $data["username"],
          'biography' => $data["biography"],
          'participant_id' => $id
      );

      //$json_data = json_encode($json_data);

      // use key 'http' even if you send the request to https://...
      $options = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($json_data)
          )
      );

      $context  = stream_context_create($options);

      $result = file_get_contents($url, false, $context);

      var_dump($result);
      die();
    }

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
          <label for="edit_participant_biography">Biography</label>
          <textarea class="form-control" id="edit_participant_biography" name="biography"  rows="3"><?php print($participant["biography"]) ?></textarea>
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
    // $url = "http://localhost:8004/participants.php?request=index_of_participants&render=json";
    //
    // $curl = curl_init($url);
    // curl_setopt($curl, CURLOPT_URL, $url);
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //
    // //for debug only!
    // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    //
    // $resp = curl_exec($curl);
    // curl_close($curl);
    // var_dump($resp);



    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(200);
    echo json_encode($participants);
    die();

    // $url = 'https://www.example.com';
    //
    // $curl = curl_init();
    //
    // curl_setopt($curl, CURLOPT_URL, $url);
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($curl, CURLOPT_HEADER, false);
    //
    // $data = curl_exec($curl);
    //
    // curl_close($curl);
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

      <br><br>

      <h5><a href="?request=create_participant">Create Participant</a></h5>

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
          <label for=""><h5>First Name</h5></label>
          <p><?php print($participant["first_name"]) ?></p>
        </div>
        <br>
        <div class="form-group">
          <label for=""><h5>Last Name</h5></label>
          <p><?php print($participant["last_name"]) ?></p>
        </div>
        <br>
        <div class="form-group">
          <label for=""><h5>Email-Address</h5></label>
          <p><?php print($participant["email_address"]) ?></p>
        </div>
        <br>
        <div class="form-group">
          <label for=""><h5>Phone-Number</h5></label>
          <p><?php print($participant["phone_number"]) ?></p>
        </div>
        <br>
        <div class="form-group">
          <label for=""><h5>Username</h5></label>
          <p><?php print($participant["username"]) ?></p>
        </div>
        <br>
        <div class="form-group">
          <label for="show_participant_biography"><h5>Biography</h5></label>
          <div>
            <?php print($participant["biography"]) ?>
          </div>
        </div>
        <br>
      </div>

      <br><br>

      <h5><a href="?request=edit_participant&participant_id=<?php print($participant["id"]) ?>">Edit Participant</a></h5>
      <h5><a href="?request=preview_soft_deletion_of_participant&participant_id=<?php print($participant["id"]) ?>">Delete Participant</a></h5>
      <h5><a href="?request=index_of_participants">Index Of Participants</a></h5>

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
