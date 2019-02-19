<link rel="stylesheet" type="text/css" href="css/style.css">

<?php
  include("conection.php");
  $id = $_GET['id'];

  $edit = "SELECT * FROM datos WHERE ID=$id";
  $result = mysqli_query($conection, $edit);

?>

<div class="form-create">
    <form method="POST" action="update.php">
        <h2>Edit Product</h2>
        <?php while($list = mysqli_fetch_array($result)) {
			echo "<label class='labels'>Name</label><br>";
            echo "<input type='text' name='name' value='".$list['name']."'><br>";
			echo "<label class='labels'>Price</label><br>";
        	echo "<input type='text' name='price' value='".$list['price']."'>";
			echo "<input type='hidden' name='id' value='".$id."'>";
		}?>
		<input type="submit" value=Save>
    </form>
</div>
