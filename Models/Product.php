<?php

class Product
{
    public $name;
    public $category;
    protected $price;
    public $type;
    public $image;

    public function __construct($name, Category $category, $price, Type $type, $image)
    {
        $this->name = $name;
        $this->category = $category;
        $this->image = $image;
        $this->price = $price . ' €';
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
