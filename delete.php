<?php
  include('conection.php');
  $id = $_GET['id'];
  $delete = "DELETE FROM datos WHERE ID=$id";
  $result = mysqli_query($conection, $delete);
  header("location: index.php");
?>