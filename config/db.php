<?php
mysql://b492b0521d91eb:7eabab48@us-cdbr-east-02.cleardb.com/heroku_d716fbc446cad1c?reconnect=true
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'login-project';

  //set DSN -  Database Source Name
  $dsn = 'mysql:host=' . $host .'; dbname=' . $dbname;

  try {
    //create a PDO instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";

  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>
