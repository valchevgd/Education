<?php

class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $money;

    /**
     * @var array
     */
    private $products;


    /**
     * Person constructor.
     * @param string $name
     * @param float $money
     * @throws Exception
     */
    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
    }

    public function __toString()
    {
        if (count($this->products)===0){
            return "$this->name - Nothing bought".PHP_EOL;
        }

        return "$this->name - ".implode(',', $this->products).PHP_EOL;
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
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
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
     * @param float $money
     * @throws Exception
     */
    public function setMoney(float $money): void
    {
        if ($money < 0){
            throw new Exception('Money cannot be negative');
        }
        $this->money = $money;
    }

    /**
     * @param string $products
     */
    public function setProducts(string $products): void
    {
        $this->products[] = $products;
    }

    public static function fillPersonsArr(array $peoples){

        $persons = [];

        for ($i = 0; $i < count($peoples); $i += 2) {
            $name = $peoples[$i];
            $price = $peoples[$i + 1];

            $person = new Person($name, $price);

            $persons[$name] = $person;
        }

        return $persons;
    }

    public function fillBasket($product){

        $price = $product->getPrice();
        $budget = $this->getMoney();
        $product_name = $product->getName();

        if ($budget < $price){
            echo "$this->name can't afford $product_name".PHP_EOL;
            return;
        }

        $this->setProducts($product_name);
        $this->setMoney($budget-$price);

        echo "$this->name bought $product_name".PHP_EOL;
    }
}