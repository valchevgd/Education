<?php
spl_autoload_register();

$db = DBConnection::getConnection();

$product_obj = new Products($db);

$product_id = $_GET['product_id']??null;

include 'header.html';

if (!$product_id){
    echo '<h1 style="color: red">No product found!</h1>';
    exit();
}

$product = $product_obj->getProduct($product_id);

$date = ($product['create_date'] ? date('d.m.Y, H:i:s', strtotime($product['create_date'])) : 'n/a');
$update = ($product['last_update'] ? date('d.m.Y, H:i:s', strtotime($product['last_update'])) : 'n/a');


if (!$product or !$product_id) {
    echo '<h1 style="color: red">No product found!</h1>';
    exit;
}

echo '<h4 style="color: red">ARE YOU SURE YOU WANT TO DELETE THIS PRODUCT :</h4>';

echo '<table border="2">';
foreach ($product as $key=>$value) {
    echo "<tr><th>$key</th><td>$value</td></tr>";
}
    echo '</table>';


if (isset($_POST['product_id'])){

    $product_obj->deleteProduct($_POST['product_id']);

    header('Location: index.php?mode=1');
}
?>
<br/>
<form method="post">
    <input type="hidden" name="product_id" value="<?= $product['product_id']?>">
    <a href="index.php">NO</a>
    <input class="btn btn-default" type="submit" value="Yes!">
</form>
