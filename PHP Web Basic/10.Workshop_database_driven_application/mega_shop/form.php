<form method="post">
        <input type="hidden" name="product_id" value="<?=$product['product_id']?>">
    <table>
        <?php if ($product['product_id']){?>
        <tr>
            <th>ID:</th>
            <td><?=$product['product_id']?></td>
        </tr>
        <?php } ?>
        <tr>
            <th>Name:</th>
            <td><input type="text" name="product_name" value="<?=$product['name']?>"></td>
        </tr>
        <tr>
            <th>Price:</th>
            <td><input type="text" name="price" value="<?=$product['price']?>"></td>
        </tr>
        <tr>
            <th>Description:</th>
            <td><textarea name="description"><?=$product['description']?></textarea></td>
        </tr>
        <tr>
            <th>Category:</th>
            <td>
                <select name="cat_id">
                    <option></option>
                    <?php foreach ($categories->getList() as $category):?>
                    <?php $selected = $product['cat_id']==$category['cat_id']?'selected':''?>
                    <option value="<?=$category['cat_id']?>"<?=$selected?>><?=$category['cat_name']?></option>
                    <?php endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <?php if (!$product['product_id']){ ?>
            <td>
                <button type="submit" name="save" value="1">Add Product</button>
            </td>
            <?php }else{ ?>
            <td>
                <button type="submit" name="save" value="1">Save Product</button>
            </td>
            <?php } ?>
        </tr>
    </table>
</form>

