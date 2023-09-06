<?php 
require_once __DIR__.'/../../database/db.php';
require_once __DIR__.'/../../classes/Category.php';
require_once __DIR__.'/../../classes/Product.php';
require_once __DIR__.'/../../classes/shopClasses/Cart.php';
require_once __DIR__.'/../../classes/shopClasses/CreditCard.php';
require_once __DIR__.'/../../classes/shopClasses/Customer.php';

class Customer
{
  public $name;
  public $email;
  public $password;
  public $isRegistered = false;
  public $creditCard = null;
  public $cart = null;

  public function __construct(
    string|null $name,
    string|null $email,
    string|null $password,
    CreditCard $creditCard,
  )
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->creditCard =  $creditCard;
  }
  //methods 
  public function logIn(){
    if($this->name != null && $this->email != null && $this->password != null){
      $this->isRegistered = true;
    }else{
      $this->isRegistered = true;
    }
  }
}

?>