<?php 
require_once __DIR__.'/../../database/db.php';
require_once __DIR__.'/../../classes/Category.php';
require_once __DIR__.'/../../classes/Product.php';
require_once __DIR__.'/../../classes/shopClasses/Cart.php';
require_once __DIR__.'/../../classes/shopClasses/CreditCard.php';
require_once __DIR__.'/../../classes/shopClasses/Customer.php';


class Cart
{
  public $products =[];
  public $total = 0;

  public function __construct(array $products)
  {
    $this->products = $products;
  }
  
  public function checkout($customer){
    if($customer->creditCard->cardValid()){
      foreach ($this->products as $product) {
        $this->total+= $product->formatPriceValue();
      }
      $customer->creditCard->payProduct($this->total);
    }else{
      throw new Exception("Carta non valida");
    }
  }


}


?>