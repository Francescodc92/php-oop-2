<?php 
require_once __DIR__.'/../classes/Product.php';
require_once __DIR__.'/../classes/Category.php';

$products = [

  $giocoCane1 = new Product(
    1,
    'corda per cani', 
    'https://m.media-amazon.com/images/I/81PjAxOnr-L.__AC_SX300_SY300_QL70_ML2_.jpg', 
    1599, 
    new Category('dog'),
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia vitae libero deserunt id enim facere qui repudiandae sequi doloremque nam laborum sapiente ipsa quae corrupti excepturi fugiat quia, consectetur perspiciatis blanditiis, quis voluptate hic pariatur cum repellendus! Vero, deleniti eius.',
    'game'
  ),
  $giocoGatto1 = new Product(
    2, 
    'giocattolo con piume', 
    'https://m.media-amazon.com/images/I/71Ihf9oPL+L._AC_SY300_SX300_.jpg', 
    1999, 
    new Category('cat'),
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia vitae libero deserunt id enim facere qui repudiandae sequi doloremque nam laborum sapiente ipsa quae corrupti excepturi fugiat quia, consectetur perspiciatis blanditiis, quis voluptate hic pariatur cum repellendus! Vero, deleniti eius.',
    'game'
  ),
  $cucciaGatto2 = new Product(
    3,
    'giocattolo', 
    'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/793e4ba2e2ffbbadfd01037bfcbce7ff.jpg?imageView2/2/w/800/q/70', 
    1599, 
    new Category('dog'),
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia vitae libero deserunt id enim facere qui repudiandae sequi doloremque nam laborum sapiente ipsa quae corrupti excepturi fugiat quia, consectetur perspiciatis blanditiis, quis voluptate hic pariatur cum repellendus! Vero, deleniti eius.',
    'kennel'
  ),
  $ciboCane3 = new Product(
    4,
    'cibo per cani', 
    'https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001010/1.jpg?tr=w-496,h-496&v=-1690500536', 
    1599, 
    new Category('dog'),
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia vitae libero deserunt id enim facere qui repudiandae sequi doloremque nam laborum sapiente ipsa quae corrupti excepturi fugiat quia, consectetur perspiciatis blanditiis, quis voluptate hic pariatur cum repellendus! Vero, deleniti eius.',
    'food'
  ),
  $ciboGatto2 = new Product(
    5, 
    'cibo', 
    'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-08-02t170005.031_1_1.jpg?width=700&height=700&store=default&image-type=image', 
    1999, 
    new Category('cat'),
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia vitae libero deserunt id enim facere qui repudiandae sequi doloremque nam laborum sapiente ipsa quae corrupti excepturi fugiat quia, consectetur perspiciatis blanditiis, quis voluptate hic pariatur cum repellendus! Vero, deleniti eius.',
    'food'
  ),
  $cucciaCane = new Product(
    6, 
    'cuccia per cane', 
    'https://img.kwcdn.com/product/1d14c6c03de/847c0416-a3cc-45eb-9b77-8c45ccfe2af7_1600x1600.jpeg?imageView2/2/w/800/q/70', 
    1999, 
    new Category('cat'),
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia vitae libero deserunt id enim facere qui repudiandae sequi doloremque nam laborum sapiente ipsa quae corrupti excepturi fugiat quia, consectetur perspiciatis blanditiis, quis voluptate hic pariatur cum repellendus! Vero, deleniti eius.',
    'kennel-'
  ),
]

?>