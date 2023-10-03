<?php

class Product
{
    public int $id;
    public string $name;
    public float $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice($amount)
    {
        $amount = sprintf("%.2f", $this->price);
        return $amount;
    }

    public function showDetails()
    {
        echo "- ID: $this->id\n- Name: $this->name\n- Price: $" . $this->getFormattedPrice($this->price);
    }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();