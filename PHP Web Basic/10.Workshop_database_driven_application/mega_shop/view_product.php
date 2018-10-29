<?php

spl_autoload_register();

var_dump($_POST);
$db = DBConnection::getConnection();

$product_obj = new Products($db);

$product_id = $_GET['product_id']??null;

if (!$product_id){
    echo '<h1 style="color: red">No product found!</h1>';
    exit();
}

$product = $product_obj->getProduct($product_id);

$date = ($product['create_date'] ? date('d.m.Y, H:i:s', strtotime($product['create_date'])) : 'n/a');
$update = ($product['last_update'] ? date('d.m.Y, H:i:s', strtotime($product['last_update'])) : 'n/a');

include 'header.html';

if (!$product or !$product_id){
    echo '<h1 style="color: red">No product found!</h1>';
    exit;
}
if (isset($_GET['mode'])){

    if ($_GET['mode'] ==1){
        echo '<p style="color: green">Successful Added Product</p> <br>';
    }elseif ($_GET['mode'] ==2){
        echo '<p style="color: green">Successful Edit Product</p> <br>';
    }
}

$image_path = 'uploads/'.$product['image'];

?>

<table border="4">
    <tr>
        <th>Name</th>
        <td align="center"><?= $product['name'] ?></td>
    </tr>
    <tr>
        <th>Category</th>
        <td align="center"><?= $product['cat_name'] ?></td>
    </tr>
    <tr>
        <th>Price</th>
        <td align="center"><?= $product['price'] ?></td>
    </tr>
    <tr>
        <th>Description</th>
        <td align="center"><?= $product['description'] ?></td>
    </tr>
    <tr>
        <th>ID</th>
        <td align="center"><?= $product['product_id'] ?></td>
    </tr>
    <tr>
        <th>Date Added</th>
        <td align="center"><?= $date ?></td>
    </tr>
    <tr>
        <th>Last Update</th>
        <td align="center"><?= $update ?></td>
    </tr>
</table>
<br>
    <?php echo "<img src='$image_path' width='120px' height='80px'>";?>

<br>

<?php
echo '<table>';
    echo '<th ><a href="set_product.php?product_id='.$product['product_id'].'">Edit</a></th>';
    echo '<th ><a href="delete_product.php?product_id='.$product['product_id'].'">Delete</a></th>';
echo '</table>';

?>



