<?php 
require_once __DIR__.'/../traits/HasName.php';

class Product
{
  use HasName;
  public $image;
  public $price;
  public $category;

  public function __construct(
    string  $name,
    string  $image,
    int     $price,
    Category $category,
  )
  {
    $this->name =  $name;
    $this->image =  $image;
    if(is_numeric($price) && $price > 0){
      $this->price =  $price;
    }else{
      throw new InvalidArgumentException('prezzo non valido!');
    }
    $this->category =  $category;
  }

  public function formatPriceValue()
  {
    if(is_int($this->price) && $this->price != 0){
      return $this->price / 100;
    }else{
      throw new Exception("valore $this->price non valido");
    }
  }
}

?>