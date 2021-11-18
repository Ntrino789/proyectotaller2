<?php

include('bd.php');

if (isset($_POST['agregarusu'])) {
  $nombre = $_POST['txtnombre'];
  $usuario = $_POST['txtusuario'];
  $contrase = $_POST['txtcontra'];

  $query = "INSERT INTO usuarios(nombre, username, password) VALUES ('$nombre', '$usuario','$contrase')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>