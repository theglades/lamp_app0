<?php

class CommentController
{
  public function __construct() {

  }

  public function index() 
  {
    $db = new DB($dbname, $user, $password);

    $stmt = $db->run("SELECT * FROM comments");
    $data = $stmt->fetchAll();

    return $data;
  }

  public function create() {

  }

  public function store($posted_vars) :Boolean
  {
    $db = new DB($dbname, $user, $password);

    try {
      $sql = "INSERT INTO comments (comment) VALUES (?,?)";
      $stmt= $pdo->prepare($sql);
      $stmt->execute([$posted_vars["comment"]]);

      return true;
    } catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();

      return false;
    }
  }

  public function show() {

  }

  public function edit() {

  }

  public function update($posted_vars) :Boolean
  {
    $db = new DB($dbname, $user, $password);

    try {
      $sql = "UPDATE comments SET comment=?, WHERE id=?";
      $stmt= $pdo->prepare($sql);
      $stmt->execute([$posted_vars["comment"], $posted_vars["id"]]);
      return true;
    } catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();

      return false;
    }
  }

  public function delete() :Void
  {
    $db = new DB($dbname, $user, $password);

    try {
      $sql = "DELETE FROM comments WHERE id=?";
      $stmt= $pdo->prepare($sql);
      $stmt->execute([$posted_vars["id"]]);
      return true;
    } catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();

      return false;
    }
  }

  public function destroy() {

  }

  public function preview_soft_deletion() {

  }

  public function confirm_soft_deletion() {

  }
}
