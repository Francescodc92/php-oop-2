<?php 
require_once __DIR__ .'/Product.php';

class Kennel extends Product
{
  public $padding;

  public function __construct(
    string  $title,
    string  $image,
    int     $price,
    Category $category,
    string  $padding
  )
  {
    parent::__construct(
      $title,
      $image,
      $price,
      $category,
    );
    if(is_string($padding) && strlen($padding) > 0){
      $this->padding = $padding;
    }else{
      throw new Exception("il valore imbottitura $padding non valido!");
    }
  }
}
?>