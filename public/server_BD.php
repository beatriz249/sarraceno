<?php
session_start();

// initializing variables
  $nome = "";
  $cargo = "";
  $email = "";
  $senha = "";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'laravel');

// REGISTER USER
if (isset($_POST['cadastro'])) {
  // receive all input values from the form
  $nome = mysqli_real_escape_string($db, $POST['Nome']);
  $cargo = mysqli_real_escape_string($db, $_POST['nCargo']);
  $email = mysqli_real_escape_string($db, $_POST['nEmail']);
  $senha = mysqli_real_escape_string($db, $_POST['nSenha']);
  

  // Finally, register user if there are no errors in the form

  $query = "INSERT INTO usuarios (inputNome, inputCargo, inputEmail, inputSenha) VALUES('$nome', '$cargo', '$email', '$senha')";
  mysqli_query($db, $query);
}
?>