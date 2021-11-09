<?php

class ProductController
{
  public function __construct() {

  }

  public function index() {
    $db = new DB($dbname, $user, $password);

    $stmt = $db->run("SELECT * FROM products");
    $data = $stmt->fetchAll();

    return $data;
  }

  public function create() {

  }

  public function store() {

  }

  public function show() {

  }

  public function edit() {

  }

  public function update() {

  }

  public function delete() {

  }

  public function destroy() {

  }

  public function preview_soft_deletion() {

  }

  public function confirm_soft_deletion() {

  }
}
