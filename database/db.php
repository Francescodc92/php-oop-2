<?php 

require_once __DIR__.'/../classes/Category.php';
require_once __DIR__.'/../classes/Product.php';
require_once __DIR__.'/../classes/Food.php';
require_once __DIR__.'/../classes/Game.php';
require_once __DIR__.'/../classes/kennel.php';

$catCategory = new Category(
  'cat',
  '😿',
 );
 $dogCategory = new Category(
  'dog',
  '🐶',
 );

 
 try {
  
  $genericProductForDog = new Product(
    'ciotola per acqua',
    'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/2bcac344a6ea873f16f4792b8d552ca4.jpg?imageView2/2/w/800/q/70',
    499,
    $dogCategory,
  );
  $genericProductForCat = new Product(
    'corda per cani',
    'https://m.media-amazon.com/images/I/81PjAxOnr-L.__AC_SX300_SY300_QL70_ML2_.jpg',
    1499,
    $catCategory,
  );
  
  
  
  $genericFoodCat = new Food(
    'cibo per cani', 
      'https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001010/1.jpg?tr=w-496,h-496&v=-1690500536', 
      1599, 
      $dogCategory,
      '30/10/23'
  );
  
  $genericFoodDog = new Food(
    'cibo', 
    'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-08-02t170005.031_1_1.jpg?width=700&height=700&store=default&image-type=image', 
    1999, 
    $catCategory,
    '30/09/23'
  );
  
  
  $genericGameDog = new Game(
    'corda per cani', 
      'https://m.media-amazon.com/images/I/81PjAxOnr-L.__AC_SX300_SY300_QL70_ML2_.jpg', 
      1599, 
      $dogCategory,
      'plastic'
  );
  $genericGameCat = new Game(
    'giocattolo con piume', 
      'https://m.media-amazon.com/images/I/71Ihf9oPL+L._AC_SY300_SX300_.jpg', 
      1999, 
      $catCategory,
      'plastic'
  );
  
  
  $genericKennelDog = new Kennel(
    'giocattolo', 
    'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/793e4ba2e2ffbbadfd01037bfcbce7ff.jpg?imageView2/2/w/800/q/70', 
    1599,
    $dogCategory,
    'cotton'
  );
  $genericKennelCat = new Kennel(
    'cuccia per cane', 
      'https://img.kwcdn.com/product/1d14c6c03de/847c0416-a3cc-45eb-9b77-8c45ccfe2af7_1600x1600.jpeg?imageView2/2/w/800/q/70', 
      1999, 
      $catCategory,
      'cotton'
  );
  
  $products = [
    $genericProductForDog,
    $genericProductForCat,
    $genericFoodCat,
    $genericFoodDog,
    $genericGameDog,
    $genericGameCat,
    $genericKennelDog,
    $genericKennelCat
  ];
  
} catch (Exception $e) {
  echo $e->getMessage();
}

?>