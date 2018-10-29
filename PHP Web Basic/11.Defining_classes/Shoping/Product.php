<?php

class Product
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * Product constructor.
     * @param string $name
     * @param float $price
     * @throws Exception
     */
    public function __construct(string $name, float $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }

    /**
     * @param string $name
     * @throws Exception
     */
    private function setName(string $name): void
    {
        if ($name === ''){
            throw new Exception('Name cannot be empty');
        }
        $this->name = $name;
    }

    /**
     * @param float $price
     */
    private function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }


    public static function fillProducts(array $products_input){

        $products = [];

        for ($i = 0; $i < count($products_input); $i += 2) {
            $name = $products_input[$i];
            $price = $products_input[$i + 1];

            $product = new Product($name, $price);

            $products[$name] = $product;
        }

        return $products;
    }
}