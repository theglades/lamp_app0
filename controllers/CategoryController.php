<?php

class CategoryController
{
    public function __construct() {

    }

    public function index() 
    {
      $db = new DB($dbname, $user, $password);

      $stmt = $pdo->query("SELECT * FROM categories");
      $data = $stmt->fetchAll();

      return $data;
    }

    public function create() {

    }

    public function store($posted_vars) :Boolean
    {
      $db = new DB($dbname, $user, $password);

      try {
        $sql = "INSERT INTO categories (title, content) VALUES (?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$posted_vars["name"], $posted_vars["description"]]);

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
        $sql = "UPDATE articles SET title=?, content=? WHERE id=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$posted_vars["name"], $posted_vars["description"], $posted_vars["id"]]);
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
        $sql = "DELETE FROM categories WHERE id=?";
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
