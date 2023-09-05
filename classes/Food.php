<?php 
require_once __DIR__ .'/Product.php';

class Food extends Product
{
  public $expiration;

  public function __construct(
    string  $title,
    string  $image,
    int     $price,
    Category $category,
    string $expiration
  )
  {
    parent::__construct(
      $title,
      $image,
      $price,
      $category,
    );
    $this->expiration = $expiration;
  }
}

?>