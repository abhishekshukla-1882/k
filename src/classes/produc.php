<?php


class pro extends DB
{
    public string $name;
    public string $category;
    public int $price;

    function __construct($name,$category,$price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }
    function addproduct(){
        DB::getInstance()->exec("INSERT INTO product (name,price,category) VALUES ('$this->name', '$this->price', '$this->category')");
    }
}
?>