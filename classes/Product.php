<?php 

class Product
  {
    public $id;
    public $title;
    public $image;
    public $price;
    public $category;
    public $description;
    public $tipe;

    public function __construct(
      int     $id,
      string  $title,
      string  $image,
      int     $price,
      Category $category,
      string  $description,
      string  $tipe,
  
    )
    {
      $this->createId($id);
      $this-> title = $title;
      $this-> image = $image;
      $this-> price = $price;
      $this-> category = $category;
      $this-> description = $description;
      $this-> tipe = $tipe;
    }

    //setters
    public function createId($id)
    {
      $this->id = $id;
    }
    //getters
    //methods
    public function formatPriceValue()
    {
      return $this->price / 100;
    }

}

?>