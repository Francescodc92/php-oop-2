<?php 
require_once __DIR__ .'/Product.php';

class Game extends Product
{
  public $material;

  public function __construct(
    string  $title,
    string  $image,
    int     $price,
    Category $category,
    string $material
  )
  {
    parent::__construct(
      $title,
      $image,
      $price,
      $category,
    );
    $this->material = $material;
  }
}

?>