<?php

function dd(...$params)
{
    foreach($params as $param) {
        #code...
        echo '<pre>';
        var_dump($param);
        echo'</pre>';
    }
    die();
}
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

    public function getAge()
    {
        return $this->age;
    }

    function __construct($firstname, $lastname, $age, $address, $email, $preferred_method_of_payment)
    {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->address = $address;
    $this->email = $email;
    $this->preferred_method_of_payment = $preferred_method_of_payment;
    }

    function insertCreditCard($cc)
    {
        $this->creditCard = $cc;
    }

    function getCreditCard()
    {
        return $this->creditCard;
    }
}

class PlatinumClients extends Clients
{
    protected $discount;


    public function getAge()
    {
        return $this->age;
    }

    public function setDiscount($age)
    {
        if($age > 60)
        {
            $this->discount = 30;
        }

        else 
        {
            $this->discount = 20;
        }
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}

class CreditCard {

    protected $CCnumber;
    protected $expiration_date;
    protected $CCV;

    function __construct(int $CCnumber, string $expiration_date, int $CCV)
    {
        $this->CCnumber = $CCnumber;
        $this->expiration_date = $expiration_date;
        $this->CCV = $CCV;
    }
    
}

$plat_1 = new PlatinumClients('Gino', 'Pilotino', 34, 'via Barbagianni 9', 'pilogino@gmail.com', 'credit card');
$plat_1->setDiscount($age);
$cc_1 = new CreditCard(123124132412412, '05/22', 246);

$plat_1->insertCreditCard($cc_1);
// dd($plat_1->getAge());
dd($plat_1);
// dd($plat_1->getCreditCard());

//mi aggiunge all'interno dell'oggetto $plat_1 appartenente alla classe PlatinumClients un oggetto CreditCard.





























?>