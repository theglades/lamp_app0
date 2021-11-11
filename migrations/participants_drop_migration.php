<?php

//die("called file");

// SQL statement for creating new tables
$statements = [
	'DROP TABLE participants'
];

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
