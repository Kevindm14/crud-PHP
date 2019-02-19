<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="form-create">
    <form method="POST" action="create.php">
        <h2>Create Product</h2>
        <label class="labels">Name</label><br>
        <input type="text" name="name" placeholder="Product name"><br>
        <label class="labels">Price</label><br>
        <input type="text" name="price" placeholder="$3000"><br><br>
        <input type="submit" name="send" value="Create product">
    </form>
</div>


<?php 
    include('conection.php');

    $name = $_POST['name'];
    $price = $_POST['price'];

    $create = "INSERT INTO datos (Name, Price) VALUES('$name', '$price')";
    if ($conection->query($create) === TRUE) {
        echo "Cambios guardados";
        header("location: index.php");
    }
?>
