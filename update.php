<?php
  include("conection.php");
  $name = $_POST['name'];
  $price = $_POST['price'];
  $id = $_POST['id'];

  $update = "UPDATE datos SET name='$name', price='$price' WHERE id=$id";
  if($conection->query($update) === TRUE) {
	echo "Cambios guardados";
    header("location: index.php");
  } else {
	echo "Algo salió mal.";
	echo "<a href='index.php'>Vuelve a intentarlo</a>";  
  }
?>