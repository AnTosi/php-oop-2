<?php
class Products
{
    public $name;
    public $type;
    public $brand;
    public $price;
    public $weight;
    public $IDcode;
    
    function __construct($name, $type, $brand, $price, $weight, $IDcode)
    {
        $this->name = $name;
        $this->type = $type;
        $this->brand = $brand;
        $this->price = $price;
        $this->weight = $weight;
        $this->IDcode = $IDcode;
    }
}

class UsedProducts extends Products
{
    public $productAge;
    public $condition;

    function __construct($productAge, $condition)
    {
        $this->productAge = $productAge;
        $this->condition = $condition;
    }
}

class Clients
{
    protected $firstname;
    protected $lastname;
    protected $age;
    protected $address;
    protected $email;
    protected $preferred_method_of_payment;

    function __construct($firstname, $lastname, $age, $address, $email, $preferred_method_of_payment)
    {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->address = $address;
    $this->email = $email;
    $this->preferred_method_of_payment = $preferred_method_of_payment;
    }

}

class PlatinumClients extends Clients
{
    protected $discount;
}



























?>