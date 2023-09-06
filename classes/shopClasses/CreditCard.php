<?php 
require_once __DIR__.'/../../database/db.php';
require_once __DIR__.'/../../classes/Category.php';
require_once __DIR__.'/../../classes/Product.php';
require_once __DIR__.'/../../classes/shopClasses/Cart.php';
require_once __DIR__.'/../../classes/shopClasses/CreditCard.php';
require_once __DIR__.'/../../classes/shopClasses/Customer.php';


class CreditCard
{
  public $ccPan; 
  public $ccExpryDate; 
  public $ccCVC;
  public $isValid = false;

  public function __construct(
    int $ccPan ,
    $ccExpryDate ,
    int $ccCVC,
  )
  {
    $this->ccPan =  $ccPan; 
    $this->ccExpryDate =  $ccExpryDate; 
    $this->ccCVC =  $ccCVC;
  }

  public function cardValid()
  {
    if($this->ccExpryDate > date('Y-m-d')){
      $this->isValid = true;
    }
    return $this->isValid;
  }

  public function payProduct($total){
    echo 'transazione di '.$total.'€ eseguita con successo';
  }

}
?>