<?php

// class DB
// {
//     public $pdo;
//
//     public function __construct($db, $username = NULL, $password = NULL, $host = '127.0.0.1', $port = 3306, $options = [])
//     {
//         $default_options = [
//             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//             PDO::ATTR_EMULATE_PREPARES => false,
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         ];
//         $options = array_replace($default_options, $options);
//         $dsn = "mysql:host=$host;dbname=$db;port=$port;charset=utf8mb4";
//
//         try {
//             $this->pdo = new \PDO($dsn, $username, $password, $options);
//         } catch (\PDOException $e) {
//             throw new \PDOException($e->getMessage(), (int)$e->getCode());
//         }
//     }
//     public function run($sql, $args = NULL)
//     {
//         if (!$args)
//         {
//             return $this->pdo->query($sql);
//         }
//         $stmt = $this->pdo->prepare($sql);
//         $stmt->execute($args);
//         return $stmt;
//     }
// }

$host = 'localhost';
$db = 'lampapp0';
$user = 'marius';
$password = 'MariusMysqlPassword0!';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
$pdo = new PDO($dsn, $user, $password);

if ($pdo) {
  //echo "Connected to the $db database successfully!";
}
} catch (PDOException $e) {
  echo "error";
  echo $e->getMessage();
}
