<?php

require_once 'source/db_connect.php';

if(isset($_POST['signup-btn'])) {

      $username = $_POST['user-name'];
      $email = $_POST['user-email'];
      $password = $_POST['user-pass'];
	  $deporte = $_POST['deporte'];

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
      $SQLInsert = "INSERT INTO users (username, password, email, deporte, to_date)
                   VALUES (:username, :password, :email, :deporte, now())";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':username' => $username, ':password' => $hashed_password, ':email' => $email, ':deporte' => $deporte));

      if($statement->rowCount() == 1) {
        header('location: formulario.html');
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}

?>