<?php

include("../databases/mysql_connection.php");

class ArticleController
{
  public function __construct() {

  }

  public function index()
  {
    $db = new DB($dbname, $user, $password);

    $stmt = $pdo->query("SELECT * FROM articles");
    $data = $stmt->fetchAll();

    return $data;
  }

  public function create()
  {




  }

  public function store($posted_vars) :Boolean
  {
    $db = new DB($dbname, $user, $password);

    try {
      $sql = "INSERT INTO articles (title, content) VALUES (?,?)";
      $stmt= $pdo->prepare($sql);
      $stmt->execute([$posted_vars["title"], $posted_vars["content"]]);

      return true;
    } catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();

      return false;
    }
  }

  public function show()
  {

  }

  public function edit() {

  }

  public function update($posted_vars) :Boolean
  {
    $db = new DB($dbname, $user, $password);

    try {
      $sql = "UPDATE articles SET title=?, content=? WHERE id=?";
      $stmt= $pdo->prepare($sql);
      $stmt->execute([$posted_vars["title"], $posted_vars["content"], $posted_vars["id"]]);
      return true;
    } catch(Exception $e) {
      echo 'Message: ' .$e->getMessage();

      return false;
    }
  }

  public function delete() {

  }

  public function destroy() {

  }

  public function preview_soft_deletion() {
    $sql = "DELETE FROM articles WHERE id=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$posted_vars["id"]]);
  }

  public function confirm_soft_deletion() {

  }
}
