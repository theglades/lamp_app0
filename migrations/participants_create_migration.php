<?php

// SQL statement for creating new tables
$statements = [
	'CREATE TABLE participants(
        id   BIGINT AUTO_INCREMENT,
        first_name  VARCHAR(100) NULL,
        last_name   VARCHAR(100) NULL,
        email_address VARCHAR(100) NULL,
        phone_number VARCHAR(100) NULL,
        username VARCHAR(100) NULL,
        biography TEXT NULL,
        PRIMARY KEY(id)
    )'];

    require('../databases/mysql_connection.php');

    // execute SQL statements
    foreach ($statements as $statement) {
      echo "executing statement";

      try {
        $pdo->exec($statement);
        echo "executed successfully";
      } catch (PDOException $e) {
        echo "error";
        echo $e->getMessage();
      }
    }
