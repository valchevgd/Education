<?php

spl_autoload_register();

$db =DBConnection::getConnection();
$products = new Products($db);

include 'header.html';

if (isset($_GET['mode'])){
    echo '<p style="color: red">Successful Delete Product</p>';
}
?>
    <h1> Welcome to My Mega Shop!</h1>

    <table border=6>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th colspan="4">Options</th>

        <?php

        foreach ($products->getList() as $product) {
            $date = ($product['create_date'] ? date('d.m.Y', strtotime($product['create_date'])) : 'n/a');

            echo '<tr>';
            echo '<td>' . $product['name'] . '</td>';
            echo '<td>' . $product['cat_name'] . '</td>';
            echo '<td>' . $product['price'] . '</td>';
            echo '<td><a href="view_product.php?product_id='.$product['product_id'].'">View</a></td>';
            echo '<td><a href="set_product.php?product_id='.$product['product_id'].'">Edit</a></td>';
            echo '<td><a href="delete_product.php?product_id='.$product['product_id'].'">Delete</a></td>';
            echo '<td><a href="upload_picture.php?product_id='.$product['product_id'].'">Upload Picture</a></td>';
        }
        ?>
    </table>
    <br>

    <form action="set_product.php">
        <input class="btn btn-default" type="submit" value="Add New Product">
    </form>
<br>
    <form action="view_all.php">
        <input class="btn btn-default" type="submit" value="View All Products">
    </form>

<?php
include 'footer.html';