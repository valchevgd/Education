<?php

class Products
{
    /**
     * @var PDO
     */
    private $db;

    /**
     * Products constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    public function getList()
    {
        $result = $this->db->query('SELECT p.product_id, p.price,p.name, p.create_date, c.cat_name 
                                             FROM products AS p
                                             INNER JOIN categories AS c
                                             USING (CAT_ID)');

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            yield $row;
        }
    }

    public function getProduct(int $product_id)
    {
        $result = $this->db->prepare('SELECT p.product_id, p.name, p.price, p.create_date, c.cat_name, p.last_update, p.description, p.cat_id, p.image
                                             FROM products AS p
                                             INNER JOIN categories AS c
                                             USING (CAT_ID)
                                             WHERE p.product_id = :product_id');

        $result->bindParam('product_id', $product_id);
        $result->execute();

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct($product_name, $price, $description, $cat_id)
    {
        $result = $this->db->prepare('INSERT INTO products(NAME, PRICE, DESCRIPTION, CAT_ID)
                                               VALUES (:product_name, :price, :description, :cat_id)');

        $result->bindParam('product_name', $product_name);
        $result->bindParam('price', $price);
        $result->bindParam('description', $description);
        $result->bindParam('cat_id', $cat_id);

        $result->execute();

        return $this->db->lastInsertId();
    }

    public function updateProduct($product_name, $price, $description, $cat_id, $product_id)
    {
        $result = $this->db->prepare('UPDATE products SET NAME = :product_name, 
                                                                  PRICE = :price, 
                                                                  DESCRIPTION = :description,
                                                                  CAT_ID = :cat_id
                                                                  WHERE PRODUCT_ID = :product_id');

        $result->bindParam('product_id', $product_id);
        $result->bindParam('product_name', $product_name);
        $result->bindParam('price', $price);
        $result->bindParam('description', $description);
        $result->bindParam('cat_id', $cat_id);

        $result->execute();
    }

    public function deleteProduct($product_id)
    {
        $result = $this->db->prepare('DELETE FROM products
                                             WHERE product_id = :product_id');

        $result->bindParam('product_id', $product_id);
        return $result->execute();
    }

    public function uploadImage(string $image, $product_id)
    {
        $result = $this->db->prepare('UPDATE products 
                                               SET image = :image
                                               WHERE product_id = :product_id');

        $result->bindParam('product_id', $product_id);
        $result->bindParam('image', $image);


        $result->execute();
    }


}

