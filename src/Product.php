<?php

namespace Cavo;

use DateTime;
use Fiber;

class Product
{
    private $productName = '';
    private float $productPrice = 0;

    public function __construct(string $name = '', float $price = 0)
    {
        $a  = new DateTime();
        $b = new Fiber();
        $this->setProductName($name);
        $this->setProductPrice($price);
    }

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function setProductName(string $name): void
    {
        $this->productName = $name;
    }

    public function getProductPrice(): float
    {
        return $this->productPrice;
    }

    public function setProductPrice(float $price): void
    {
        $this->productPrice = $price;
    }
}
