<!DOCTYPE html>
<html>
<head>
    <title>CRUD-PRODUCTS</title>
</head>
<body>
    <?php
        include('conection.php');

        $solicitud = "SELECT * FROM datos ORDER BY price ASC";
        $result = mysqli_query($conection, $solicitud);
    ?>
    <a href="create.php">Create Product</a>
    <table border='1' style="padding: 12px 12px;">
        <thead>
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php while ($list = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $list['name'] ?></td>
                        <td><?php echo $list['price'] ?></td>
                        <td>
                            <a href="<?php echo "edit.php?id=".$list['ID'] ?>">Edit</a>
                            <a href="<?php echo "delete.php?id=".$list['ID'] ?>">Delete</a>
                        </td>
                    </tr>      
            <?php }?>
        </tbody>
    </table>
</body>
</html>