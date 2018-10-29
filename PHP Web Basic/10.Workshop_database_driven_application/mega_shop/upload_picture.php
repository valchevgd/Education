<?php

spl_autoload_register();

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

<form action="fileUpload.php" method="post" enctype="multipart/form-data">
    Upload a File:
    <input type="hidden" name="product_id" value="<?=$product['product_id']?>">
    <input type="file" name="myfile" id="fileToUpload">
    <input type="submit" name="submit" value="Upload File Now" >
</form>


